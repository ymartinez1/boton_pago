<?php
$servername = "localhost";
$database = "boton_pago";
$username = "root";
$password = "desarrollador";
// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database, 3306);
// Checkear conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>