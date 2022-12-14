<?php

if($_SESSION["logueado"] == TRUE) {
	@session_start();
	session_destroy();
	header("Location: https://bostoneduca.cl/pagofacil/rut.php");
} else {
	@session_start();
	session_destroy();
	header("Location: https://bostoneduca.cl/pagofacil/rut.php");
}

?>