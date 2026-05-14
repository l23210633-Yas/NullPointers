k<?php
require 'config/conexion.php';
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $rol = $_POST['rol'];

    try {
        $sql = "INSERT INTO usuarios (nombre, correo, password, rol) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$nombre, $correo, $password, $rol])) {
            $mensaje = "<div class='alert alert-success'>¡Registro exitoso! <a href='login.php'>Inicia sesión aquí</a></div>";
        }
    } catch (PDOException $e) {
        $mensaje = "<div class='alert alert-danger'>Error: El correo ya está registrado.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Pi-Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Crear Cuenta</h2>
                        <?php echo $mensaje; ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo Electrónico</label>
                                <input type="email" name="correo" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">¿Qué quieres hacer?</label>
                                <select name="rol" class="form-select">
                                    <option value="cliente">Comprar productos</option>
                                    <option value="vendedor">Vender productos</option>
                                    <option value="admin">Administrar Marketplace</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrarme</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="index.php" class="text-muted">Volver al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
