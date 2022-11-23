<?php 
include ("config/bd_connect.php");
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar from users where username = '$usuario' and password = '$clave' ";
$consulta = mysqli_query($conn, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../index.php");
}else{
    echo "Datos Inconrrectos";
}
?>