<?php
$username = "root";
$password = "desarrollador";
$database = "boton_pago";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);
$field4 = $mysqli->real_escape_string($_POST['field4']);
$field5 = $mysqli->real_escape_string($_POST['field5']);
$field6 = $mysqli->real_escape_string($_POST['field6']);

$query = "INSERT INTO apoderado (idApoderado, Rut, Nombre, Apellido, Email, Direccion)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}')";

$mysqli->query($query);
$mysqli->close();