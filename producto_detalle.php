<?php
session_start();
include("config.php");

if (isset($_GET['id'])) {
    $producto_id = $_GET['id'];

    // Obtener el producto desde la base de datos
    $stmt = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
    $stmt->execute([$producto_id]);
    $producto = $stmt->fetch();
} else {
    die("Producto no encontrado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto | Rabitt Market</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <div class="logo" onclick="showView('inicio')">🐰 Rabitt<span>Market</span></div>
        <button onclick="showView('inicio')">Volver al inicio</button>
    </header>

    <div class="product-detail">
        <div class="product-img">
            <img src="<?= $producto['image_path'] ?>" alt="<?= $producto['name'] ?>" />
        </div>
        <div class="product-info">
            <h3><?= $producto['name'] ?></h3>
            <p><?= $producto['description'] ?></p>
            <div class="price">MX$ <?= number_format($producto['price'], 2) ?></div>
            <button class="btn" onclick="addToCart('<?= $producto['name'] ?>', <?= $producto['price'] ?>)">Comprar ahora</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
