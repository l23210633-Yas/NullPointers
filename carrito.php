<?php
session_start();
require '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../users/login.php'); exit;
}
$uid = (int)$_SESSION['user_id'];

// Eliminar item
if (isset($_GET['eliminar'])) {
    $pdo->prepare("DELETE FROM cart WHERE user_id=? AND product_id=?")->execute([$uid, (int)$_GET['eliminar']]);
    header('Location: carrito.php'); exit;
}

// Actualizar cantidad
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['update'])) {
    foreach ($_POST['qty'] as $pid => $qty) {
        $qty = max(1, (int)$qty);
        $pdo->prepare("UPDATE cart SET quantity=? WHERE user_id=? AND product_id=?")->execute([$qty, $uid, (int)$pid]);
    }
    header('Location: carrito.php'); exit;
}

// Obtener items del carrito
$stmt = $pdo->prepare("
    SELECT c.product_id, c.quantity, p.name, p.price, p.stock, p.category
    FROM cart c
    JOIN products p ON p.id = c.product_id
    WHERE c.user_id = ?
");
$stmt->execute([$uid]);
$items = $stmt->fetchAll();

$total = array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $items));
$emojis = ['Electrónica'=>'📱','Gaming'=>'🎮','Hogar'=>'🏠','Moda'=>'👗','Audio'=>'🎧','Computación'=>'💻','Sensores'=>'🔬','Cables y Conectores'=>'🔌','Pantallas'=>'📺'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Carrito · RabbitMarket</title>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
:root{--bg:#EAEDED;--header:#131921;--orange:#FFD814;--orange2:#F7CA00;--blue:#007185;--border:#d5d9d9;--text:#0f1111;--muted:#565959;--green:#007600;--red:#B12704;--radius:8px;}
*{box-sizing:border-box;margin:0;padding:0;font-family:'Outfit',sans-serif;}
body{background:var(--bg);color:var(--text);}
header{background:var(--header);padding:12px 4%;display:flex;align-items:center;justify-content:space-between;}
.logo{color:#fff;font-size:20px;font-weight:700;text-decoration:none;}
.logo span{color:var(--orange);}
header a{color:#fff;text-decoration:none;font-size:13px;}
.contenedor{max-width:1100px;margin:24px auto;padding:0 4%;display:grid;grid-template-columns:1fr 320px;gap:20px;}
@media(max-width:750px){.contenedor{grid-template-columns:1fr;}}
.card{background:#fff;border-radius:var(--radius);border:1px solid var(--border);padding:20px;}
h2{font-size:20px;font-weight:600;margin-bottom:18px;}
.item{display:flex;align-items:center;gap:16px;padding:16px 0;border-bottom:1px solid var(--border);}
.item:last-child{border-bottom:none;}
.item-img{font-size:48px;min-width:64px;text-align:center;}
.item-info{flex:1;}
.item-name{font-size:15px;font-weight:500;margin-bottom:4px;}
.item-cat{font-size:12px;color:var(--muted);}
.item-price{font-size:18px;font-weight:600;color:var(--red);white-space:nowrap;}
.item-price::before{content:"MX$";font-size:11px;vertical-align:top;}
.qty-input{width:60px;padding:6px;border:1px solid var(--border);border-radius:4px;font-size:14px;text-align:center;}
.btn-del{background:none;border:none;color:var(--red);cursor:pointer;font-size:13px;text-decoration:underline;}
.btn-save{margin-top:14px;padding:10px 24px;background:var(--orange);border:1px solid #a88734;border-radius:20px;font-weight:600;cursor:pointer;font-size:14px;font-family:'Outfit',sans-serif;}
.resumen{position:sticky;top:20px;}
.total-line{display:flex;justify-content:space-between;font-size:14px;margin-bottom:10px;color:var(--muted);}
.total-final{display:flex;justify-content:space-between;font-size:20px;font-weight:700;border-top:1px solid var(--border);padding-top:14px;margin-top:6px;}
.btn-checkout{display:block;width:100%;padding:13px;background:var(--orange);border:1px solid #a88734;border-radius:20px;font-weight:700;cursor:pointer;font-size:15px;text-align:center;text-decoration:none;color:#000;margin-top:16px;font-family:'Outfit',sans-serif;}
.btn-checkout:hover{background:var(--orange2);}
.empty{text-align:center;padding:60px;color:var(--muted);}
.empty-icon{font-size:64px;margin-bottom:16px;}
.btn-seguir{display:inline-block;margin-top:14px;color:var(--blue);text-decoration:none;font-size:14px;}
</style>
</head>
<body>
<header>
    <a class="logo" href="../products/index.php">🐰 Rabitt<span>Market</span></a>
    <a href="../products/index.php">← Seguir comprando</a>
</header>

<div class="contenedor">
    <div>
        <div class="card">
            <h2>🛒 Mi carrito (<?= count($items) ?> productos)</h2>
            <?php if (empty($items)): ?>
            <div class="empty">
                <div class="empty-icon">🛒</div>
                <p>Tu carrito está vacío</p>
                <a href="../products/index.php" class="btn-seguir">← Ir a la tienda</a>
            </div>
            <?php else: ?>
            <form method="POST">
                <?php foreach($items as $it):
                    $em = $emojis[$it['category']??''] ?? '📦';
                ?>
                <div class="item">
                    <div class="item-img"><?= $em ?></div>
                    <div class="item-info">
                        <div class="item-name"><?= htmlspecialchars($it['name']) ?></div>
                        <div class="item-cat"><?= htmlspecialchars($it['category']??'General') ?></div>
                        <button type="button" class="btn-del" onclick="window.location.href='carrito.php?eliminar=<?= $it['product_id'] ?>'">🗑 Eliminar</button>
                    </div>
                    <input type="number" name="qty[<?= $it['product_id'] ?>]" value="<?= $it['quantity'] ?>" min="1" max="<?= $it['stock'] ?>" class="qty-input">
                    <div class="item-price"><?= number_format($it['price'] * $it['quantity'], 2) ?></div>
                </div>
                <?php endforeach; ?>
                <button type="submit" name="update" class="btn-save">💾 Actualizar carrito</button>
            </form>
            <?php endif; ?>
        </div>
    </div>

    <?php if (!empty($items)): ?>
    <div class="resumen">
        <div class="card">
            <h2>Resumen del pedido</h2>
            <?php foreach($items as $it): ?>
            <div class="total-line">
                <span><?= htmlspecialchars($it['name']) ?> x<?= $it['quantity'] ?></span>
                <span>MX$<?= number_format($it['price'] * $it['quantity'], 2) ?></span>
            </div>
            <?php endforeach; ?>
            <div class="total-line">
                <span>Envío estándar</span><span style="color:var(--green)">GRATIS</span>
            </div>
            <div class="total-final">
                <span>Total</span>
                <span>MX$<?= number_format($total, 2) ?></span>
            </div>
            <a href="../checkout/index.php" class="btn-checkout">Proceder al pago →</a>
        </div>
    </div>
    <?php endif; ?>
</div>
</body>
</html>
