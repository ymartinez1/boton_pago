<?php

function select_colegio($var_scol) {
	switch ($var_scol) {
		case 754: return "cicv";
		case 755: return "csm";
		case 751: return "csfp";
		case 793: return "bcam";
		case 794: return "bals";
		case 761: return "iom";
		case 753: return "ceb";
		case 752: return "cse";
		case 757: return "csab";
		case 760: return "cssla";
		case 759: return "cla";
		case 758: return "cman";
		case 791: return "bcm";
		case 792: return "bclf";
	}
}

function limpia_rut($var_lrut) {
	$lrut = preg_replace('([^A-Za-z0-9])', '', $var_lrut);
	return $lrut;
}

function formateo_rut($var_frut) {
	if (strlen($var_frut) = 11) {
		$p1 = substr($var_frut, 0,1);
		$p2 = substr($var_frut, 1,3);
		$p3 = substr($var_frut, 4,3);
		$p4 = substr($var_frut, 7);
		return $p1.".".$p2.".".$p3."-".$p4;
	} else if (strlen($var_frut) = 12) {
		$p1 = substr($var_frut, 0,2);
		$p2 = substr($var_frut, 2,3);
		$p3 = substr($var_frut, 5,3);
		$p4 = substr($var_frut, 8);
		return $p1.".".$p2.".".$p3."-".$p4;
	}
}

function formateo_fecha($var_ffecha){
	if (strlen($var_ffecha) = 7) {
		$p1 = substr($var_ffecha, 0,1);
		$p2 = substr($var_ffecha, 1,2);
		$p3 = substr($var_ffecha, 3,4);
		return $p1."/".$p2."/".$p3;
	} else if (strlen($var_ffecha) = 8) {
		$p1 = substr($var_ffecha, 0,2);
		$p2 = substr($var_ffecha, 2,2);
		$p3 = substr($var_ffecha, 4,4);
		return $p1."/".$p2."/".$p3;
	}
}

function vencido($var_v) {
	$hoy = date('Y-m-d');
	$hoy_2 = strtotime($hoy);

	$fecha_replace = str_replace("/", "-", $var_v);
	$fecha_fin = strtotime($fecha_replace);

	$fecha_por_vencer = date("Y-m-d",strtotime($hoy ."-5 days"));

	if ($fecha_por_vencer > $fecha_fin) {
		$var_ven = "<span class='active'>Próxima a vencer</span>";
		return $var_ven;
	} else if ($hoy_2 >= $fecha_fin){
		$var_ven = "<span class='vencida'>Vencida</span>";
		return $var_ven;
	}
}

?>