<?php
// Datos de conexión
$host = 'localhost';
$dbname = 'marketplace';
$username = 'marketplace';
$password = 'TuPasswordSegura';

try {
    // Conectar a la base de datos con PDO
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
