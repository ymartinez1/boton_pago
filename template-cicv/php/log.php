<?php
 
if(!empty($_POST['rut'])){

	require("connect.php");
	require("function.php");

	$rut = $_POST["rut"];
	$rut_limp = limpia_rut($rut);
	$matriz = [];

	$consulta_buscar = "SELECT * FROM apoderado_test WHERE rut = '$rut'";

	if($resultado_buscar = $mysqli->query($consulta_buscar)) {
		$var = 0;
		while($array_buscar = $resultado_buscar->fetch_array(MYSQLI_ASSOC)) {
			//$rut_apoderado = $array_buscar["rut"];
			//$fecha_venc = $array_buscar["fecha_vencim"];

			$matriz[$var] = $array_buscar;
			$var++;
		}
		$resultado_buscar->close();
	}

	require("connect_close.php");

	session_start();
	$_SESSION["logueado"] = TRUE;
	$_SESSION["datos"] = $matriz;

	$_SESSION["rut_format"] = formateo_rut($rut);
	$_SESSION["rut_no_format"] = $rut_limp;

	$_SESSION["colegio"] = select_colegio($matriz[0]["id_colegio"]);

	//$_SESSION["monto_cuota"] = number_format($monto_cuota);
	//$_SESSION["fecha_venc"] = formateo_fecha($fecha_venc);
	header("Location: ../detalle.php");

} else {
	echo "¿?";
}

?>