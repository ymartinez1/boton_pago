<?php

	$mysqli = new mysqli("190.96.82.20","boston2021_btnpago_usertest","02h;bRnV+E}t","boston2021_botonpago_prueba");
	//$mysqli=new mysqli("Servidor","Usuario de la BD","Contraseña","Nombre de la BD");

	if(mysqli_connect_errno()){
		echo 'Conexión Fallida : ', mysqli_connect_error();
		exit();
	}else {
		echo "Conexión Correcta";
	}

?>