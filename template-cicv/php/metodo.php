<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@session_start();
if($_SESSION["logueado"] == TRUE) {
	//falta if en caso de enviar 0, aunque se debería bloquear antes en detalle.php

	$total = $_POST["total_hidden"];

	echo $total;
} /*else {
	require("close.php");
}*/

?>