<?php
 
if(!empty($_POST['rut'])){

	require("connect.php");

	$rut = $_POST["rut"];
	$matriz = [];

	$consulta_buscar = "SELECT * FROM apoderado_test WHERE rut = '$rut'";
	//$resultado_buscar = $mysqli->query($consulta_buscar);
	//$array_buscar = $resultado_buscar->fetch_array(MYSQLI_ASSOC);

	if($resultado_buscar = $mysqli->query($consulta_buscar)) {
		$var = 0;
		while($array_buscar = $resultado_buscar->fetch_array(MYSQLI_ASSOC)) {
			$matriz[$var] = $array_buscar;
			$var++;
		}
		$resultado_buscar->close();
	}

	require("connect_close.php");

	session_start();
	$_SESSION["logueado"] = TRUE;
	$_SESSION["datos"] = $matriz;
	header("Location: ../detalle.php");

} else {
	echo "¿?";
}

?>