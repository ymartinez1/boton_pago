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
			$rut_apoderado = $array_buscar["rut"];
			$fecha_venc = $array_buscar["fecha_vencim"];
			$monto_cuota = mb_substr($array_buscar["monto_cuota"], 0, 6);
			$matriz[$var] = $array_buscar;
			$var++;
		}
		$resultado_buscar->close();
	}
	function formateo_rut($rut){
		$p1 = substr($rut, 0,2);
		$p2 = substr($rut, 2,3);
		$p3 = substr($rut, 5,3);
		$p4 = substr($rut, 8);
		return $p1.".".$p2.".".$p3."-".$p4;
	  }
	  function formateo_fecha($fecha_venc){
		$p1 = substr($fecha_venc, 0,1);
		$p2 = substr($fecha_venc, 1,2);
		$p3 = substr($fecha_venc, 3,6);
		return $p1."-".$p2."-".$p3;
	  }


	require("connect_close.php");

	session_start();
	$_SESSION["logueado"] = TRUE;
	$_SESSION["datos"] = $matriz;
	$_SESSION["rut"] = formateo_rut($rut);
	$_SESSION["monto_cuota"] = number_format($monto_cuota);
	$_SESSION["fecha_venc"] = formateo_fecha($fecha_venc);
	header("Location: ../detalle.php");

} else {
	echo "¿?";
}

?>