<?php

$host = "localhost";
$user = "boston2021_btnpago_usertest";
$pass = "02h;bRnV+E}t";
$database = "boston2021_botonpago_prueba";

$mysqli = new mysqli($host, $user, $pass, $database);
    //$mysqli=new mysqli("Servidor","Usuario de la BD","Contraseña","Nombre de la BD");

if(mysqli_connect_errno()){
    echo 'Conexión Fallida: ', mysqli_connect_error();
    exit();
} else {
    $codificacion = $mysqli->query("SET NAMES 'utf8'");
}

?>