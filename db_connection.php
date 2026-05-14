<?php
// Conexión a la base de datos (MariaDB)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
