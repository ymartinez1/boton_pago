<?php
$servername = "localhost";
$database = "boston2021_botonpago_prueba";
$username = "boston2021_btnpago_usertest";
$password = "02h;bRnV+E}t";
// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database, 3306);
// Checkear conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "conexión exitosa";
?>