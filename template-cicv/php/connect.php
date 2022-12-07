<?php

$username = "root";
$password = "desarrollador";
$database = "boton_pago";

$mysqli = new mysqli("localhost", $username, $password, $database, 3306);
    //$mysqli=new mysqli("Servidor","Usuario de la BD","Contraseña","Nombre de la BD");

if(mysqli_connect_errno()){
    echo 'Conexión Fallida: ', mysqli_connect_error();
    exit();
} else {
    $codificacion = $mysqli->query("SET NAMES 'utf8'");
}

?>