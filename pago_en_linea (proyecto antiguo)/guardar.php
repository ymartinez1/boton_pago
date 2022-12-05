<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	session_start();
	if($_SESSION["logueado"] == TRUE) {

		require("conexion.php");

		$rutAlumno = $_SESSION["rutAlumno"];
		$nombreAlumno = $_SESSION['nombreAlumno'];
		$apellidoPaternoAlumno = $_SESSION['apellidoPaternoAlumno'];
		$apellidoMaternoAlumno = $_SESSION["apellidoMaternoAlumno"];
		$curso = $_SESSION['curso'];
		$anho = $_SESSION['anho'];
		$valor = $_SESSION['valor'];

		$rutPadre = $_SESSION['rutPadre'];
		$nombrePadre = $_SESSION['nombrePadre'];
		$apellidoPaternoPadre = $_SESSION['apellidoPaternoPadre'];
		$apellidoMaternoPadre = $_SESSION["apellidoMaternoPadre"];
		$correoPadre = $_SESSION['correoPadre'];
		$celularPadre = $_SESSION['celularPadre'];
		if ($_SESSION["telefonoPadre"] == '') {
			$telefonoPadre = 0;
		}else{
			$telefonoPadre = $_SESSION["telefonoPadre"];
		}

		$rutMadre = $_SESSION['rutMadre'];
		$nombreMadre = $_SESSION['nombreMadre'];
		$apellidoPaternoMadre = $_SESSION['apellidoPaternoMadre'];
		$apellidoMaternoMadre = $_SESSION["apellidoMaternoMadre"];
		$correoMadre = $_SESSION['correoMadre'];
		$celularMadre = $_SESSION['celularMadre'];
		if ($_SESSION["telefonoMadre"] == '') {
			$telefonoMadre = 0;
		}else{
			$telefonoMadre = $_SESSION["telefonoMadre"];
		}

		$rutApoderado = $_SESSION['rutApoderado'];
		$nombreApoderado = $_SESSION['nombreApoderado'];
		$apellidoPaternoApoderado = $_SESSION['apellidoPaternoApoderado'];
		$apellidoMaternoApoderado = $_SESSION["apellidoMaternoApoderado"];
		$parentesco = $_SESSION['parentesco'];
		$direccionApoderado = $_SESSION['direccionApoderado'];
		$correoApoderado = $_SESSION['correoApoderado'];
		$celularApoderado = $_SESSION['celularApoderado'];
		if ($_SESSION["telefonoApoderado"] == '') {
			$telefonoApoderado = 0;
		}else{
			$telefonoApoderado = $_SESSION["telefonoApoderado"];
		}

		date_default_timezone_set('America/Santiago');
		$fechaHoy = date("Y/m/d");
		$fecha = $fechaHoy;
		$horaHoy = date("H:i");
		$hora = $horaHoy;

		$guarda = "INSERT INTO pago_en_linea(rutAlumno, nombreAlumno, apellidoPaternoAlumno, apellidoMaternoAlumno, curso, anho, valor, rutPadre, nombrePadre, apellidoPaternoPadre, apellidoMaternoPadre, correoPadre, celularPadre, telefonoPadre, rutMadre, nombreMadre, apellidoPaternoMadre, apellidoMaternoMadre, correoMadre, celularMadre, telefonoMadre, rutApoderado, nombreApoderado, apellidoPaternoApoderado, apellidoMaternoApoderado, parentesco, direccionApoderado, correoApoderado, celularApoderado, telefonoApoderado, fecha, hora) VALUES ('$rutAlumno', '$nombreAlumno', '$apellidoPaternoAlumno', '$apellidoMaternoAlumno', '$curso', '$anho', '$valor', '$rutPadre', '$nombrePadre', '$apellidoPaternoPadre', '$apellidoMaternoPadre', '$correoPadre', '$celularPadre', '$telefonoPadre', '$rutMadre', '$nombreMadre', '$apellidoPaternoMadre', '$apellidoMaternoMadre', '$correoMadre', '$celularMadre', '$telefonoMadre', '$rutApoderado', '$nombreApoderado', '$apellidoPaternoApoderado', '$apellidoMaternoApoderado', '$parentesco', '$direccionApoderado', '$correoApoderado', '$celularApoderado', '$telefonoApoderado', '$fecha', '$hora')";

		$ejecuta = $mysqli->query($guarda);

		header("Location: pago.php");

	} else {
		
		session_destroy();
		header("Location: index.php");
		
	}

?>