<?php

function select_iniciales($var_scol) {
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
		default: return "febe";
	}
}

function select_colegio($var_ncol) {
	switch ($var_ncol) {
		case 754: return "Colegio Inmaculada Concepción de Vitacura";
		case 755: return "Colegio San Marcos";
		case 751: return "Colegio San Francisco de Paine";
		case 793: return "Boston College Alto Macul";
		case 794: return "Boston Academy Laguna del Sol";
		case 761: return "Instituto O'Higgins de Maipú";
		case 753: return "Colegio El Bosque";
		case 752: return "Colegio Sebastián Elcano";
		case 757: return "Colegio San Antonio del Baluarte";
		case 760: return "Colegio San Sebastián de Los Andes";
		case 759: return "Colegio Los Alpes";
		case 758: return "Colegio Manantial";
		case 791: return "Boston College Maipú";
		case 792: return "Boston College La Farfana";
		default: return "Fundación BostonEduca";
	}
}

function select_url($var_surl) {
	switch ($var_surl) {
		case 754: return "https://cicv.cl/";
		case 755: return "https://colegiosanmarcos.cl/";
		case 751: return "https://csfp.cl/";
		case 793: return "https://bostoncollegealtomacul.cl/";
		case 794: return "https://bostonacademy.cl/";
		case 761: return "https://iom.cl/";
		case 753: return "https://celbosque.cl/";
		case 752: return "https://selcano.cl/";
		case 757: return "https://elbaluarte.cl/";
		case 760: return "https://ssla.cl/";
		case 759: return "https://colegiolosalpes.cl/";
		case 758: return "https://colegiomanantial.cl/";
		case 791: return "https://bostoncollegemaipu.cl/";
		case 792: return "https://bostoncollegelafarfana.cl/";
		default: return "https://bostoneduca.cl/";
	}
}

function facebook($var_fb) {
	switch ($var_fb) {
		case 754: return "https://www.facebook.com/cicv.cl";
		case 755: return "https://www.facebook.com/colegiosanmarcos.cl";
		case 751: return "https://www.facebook.com/csfp.cl";
		case 793: return "https://www.facebook.com/bostoncollegealtomacul.cl";
		case 794: return "https://www.facebook.com/bostonacademy.cl";
		default: return "https://www.facebook.com/BostonEduca/";
	}
}

function instagram($var_ig) {
	switch ($var_ig) {
		case 754: return "https://www.instagram.com/cicv.cl/";
		case 755: return "https://www.instagram.com/colegiosanmarcos.cl/";
		case 751: return "https://www.instagram.com/csfp.cl/";
		case 793: return "https://www.instagram.com/bostoncollegealtomacul.cl/";
		case 794: return "https://www.instagram.com/bostonacademy.cl/";
		default: return "https://www.instagram.com/bostoneduca/";
	}
}

function limpia_rut($var_lrut) {
	$lrut = preg_replace('([^A-Za-z0-9])', '', $var_lrut);
	return $lrut;
}

function formateo_rut($var_frut) {
	$num_r = strlen($var_frut);
	if ($num_r == 8) {
		$p1 = substr($var_frut, 0,1);
		$p2 = substr($var_frut, 1,3);
		$p3 = substr($var_frut, 4,3);
		$p4 = substr($var_frut, 7);
		$final_rut = $p1 .".". $p2 .".". $p3 ."-". $p4;
		return $final_rut;
	} else if ($num_r == 9) {
		$p1 = substr($var_frut, 0,2);
		$p2 = substr($var_frut, 2,3);
		$p3 = substr($var_frut, 5,3);
		$p4 = substr($var_frut, 8);
		$final_rut = $p1 .".". $p2 .".". $p3 ."-". $p4;
		return $final_rut;
	}
}

function formateo_fecha($var_ffecha){
	$num_f = strlen($var_ffecha);
	if ($num_f == 7) {
		$q1 = substr($var_ffecha, 0,1);
		$q2 = substr($var_ffecha, 1,2);
		$q3 = substr($var_ffecha, 3);
		$final_fecha =  $q1 ."/". $q2 ."/". $q3;
		return $final_fecha;
	} else if ($num_f == 8) {
		$q1 = substr($var_ffecha, 0,2);
		$q2 = substr($var_ffecha, 2,2);
		$q3 = substr($var_ffecha, 4);
		$final_fecha =  $q1 ."/". $q2 ."/". $q3;
		return $final_fecha;
	}
}

function obtener_mes($var_mes){
	setlocale(LC_TIME, 'es_ES');
	$num_m = strlen($var_mes);
	$orden = 0;
	if ($num_m == 7) {
		$r1 = substr($var_mes, 0,1);
		$r2 = substr($var_mes, 1,2);
		$r3 = substr($var_mes, 3);
		$orden =  $r3 ."/". $r2 ."/". $r1;
	} else if ($num_m == 8) {
		$r1 = substr($var_mes, 0,2);
		$r2 = substr($var_mes, 2,2);
		$r3 = substr($var_mes, 4);
		$orden =  $r3 ."/". $r2 ."/". $r1;
	}
	$fecha_num = strtotime($orden);
	$obtener_mes = date("m", $fecha_num);
	$fecha_letra = DateTime::createFromFormat('!m', $obtener_mes);
	$fecha_final = strftime("%B", $fecha_letra->getTimestamp());
	return ucfirst($fecha_final);
}

function vencido($var_v) {
	$hoy = date('Y-m-d');
	$hoy_num = strtotime($hoy);

	$fecha = str_replace("/", "-", $var_v);
	$fecha_num = strtotime($fecha);

	if ($hoy_num >= $fecha_num){
		$var_estado = "<span class='vencida'>Vencida</span>";
		return $var_estado;
	} else {
		$var_estado = "<span class='active'>Próxima a vencer</span>";
		return $var_estado;
	}
}

?>