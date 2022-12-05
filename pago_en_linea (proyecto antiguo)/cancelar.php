<?php

	session_start();
	if($_SESSION["logueado"] == TRUE) {

		require("conexion.php");

		$rutDelete = $_SESSION["rutAlumno"];
		$consultaDelete = "DELETE FROM pago_en_linea WHERE rutAlumno='$rutDelete'";
		$ejecutaDelete = $mysqli->query($consultaDelete);

		@session_start();
		session_destroy();
		header("Location: index.php");

	} else {
		
		@session_start();
		session_destroy();
		header("Location: index.php");
		
	}

?>