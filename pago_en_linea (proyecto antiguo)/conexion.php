<?php
	
	$mysqli = new mysqli("localhost","bostonac_formularios","i^IA[g8hI#$!","bostonac_formularios");
	//$mysqli=new mysqli("Servidor","Usuario de la BD","Contraseña","Nombre de la BD");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
	$codificacion = $mysqli->query("SET NAMES 'utf8'");

?>