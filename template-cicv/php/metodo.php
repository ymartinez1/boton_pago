<?php

@session_start();
if($_SESSION["logueado"] == TRUE) {
	
	//falta if en caso de enviar 0, aunque se debería bloquear antes en detalle.php

	$_SESSION["total_pago"] = $_POST["total_hidden"];

	header("Location: ../pago.php");

} else {

	require("close.php");

}

?>