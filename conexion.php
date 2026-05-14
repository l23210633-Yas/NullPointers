k<?php
$host = "localhost";
$db   = "marketplace";
$user = "root";
$pass = "TU_PASSWORD"; // Pon la contraseña que le pusiste a MariaDB

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
