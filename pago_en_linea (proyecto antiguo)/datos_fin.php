<?php

	session_start();
	if($_SESSION["logueado"] == TRUE) {
		$_SESSION["rutApoderado"] = $_POST["rutApoderado"];
		$_SESSION["nombreApoderado"] = $_POST["nombreApoderado"];
		$_SESSION["apellidoPaternoApoderado"] = $_POST["apellidoPaternoApoderado"];
		$_SESSION["apellidoMaternoApoderado"] = $_POST["apellidoMaternoApoderado"];
		$_SESSION["parentesco"] = $_POST["parentesco"];
		$_SESSION["direccionApoderado"] = $_POST["direccionApoderado"];
		$_SESSION['correoApoderado'] = $_POST["correoApoderado"];
		$_SESSION['celularApoderado'] = $_POST["celularApoderado"];
		$_SESSION['telefonoApoderado'] = $_POST["telefonoApoderado"];
		?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pago en Línea</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--======================================================================-->
	<link rel="icon" type="image/png" href="images/favicon.png"/>
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--======================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--======================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form" autocomplete="off" action="#" method="POST">
				<span class="contact100-form-title" id="ver-image-a">
					<img src="images/logo1.png" style="width: 100%;">
				</span>
				<span class="contact100-form-title">
					Datos del Alumno
				</span>

				<div class="showInfo">
					<label class="label-input102">RUT:&nbsp;<b><?php echo $_SESSION["rutAlumno"]; ?></b></label>
					<label class="label-input102">Nombre:&nbsp;<b><?php echo $_SESSION['nombreAlumno']; ?></b></label>
					<label class="label-input102">Apellidos:&nbsp;<b><?php echo $_SESSION['apellidoPaternoAlumno'].' '.$_SESSION["apellidoMaternoAlumno"]; ?></b></label>
					<label class="label-input102">Curso:&nbsp;<b><?php echo $_SESSION['curso']; ?></b></label>
					<label class="label-input102">Año:&nbsp;<b><?php echo $_SESSION['anho']; ?></b></label>
					<label class="label-input102">Valor Matrícula:&nbsp;<b><?php echo $_SESSION['valor']; ?></b></label>
				</div>

				<span class="contact100-form-title">
					Datos del Padre
				</span>

				<div class="showInfo">
					<label class="label-input102">RUT:&nbsp;<b><?php echo $_SESSION['rutPadre']; ?></b></label>
					<label class="label-input102">Nombre:&nbsp;<b><?php echo $_SESSION['nombrePadre']; ?></b></label>
					<label class="label-input102">Apellidos:&nbsp;<b><?php echo $_SESSION['apellidoPaternoPadre'].' '.$_SESSION["apellidoMaternoPadre"]; ?></b></label>
					<label class="label-input102">Correo:&nbsp;<b><?php echo $_SESSION['correoPadre']; ?></b></label>
					<label class="label-input102">Celular:&nbsp;<b><?php echo $_SESSION['celularPadre']; ?></b></label>
					<label class="label-input102">Teléfono:&nbsp;<b><?php echo $_SESSION['telefonoPadre']; ?></b></label>
				</div>

				<span class="contact100-form-title">
					Datos de la Madre
				</span>

				<div class="showInfo">
					<label class="label-input102">RUT:&nbsp;<b><?php echo $_SESSION['rutMadre']; ?></b></label>
					<label class="label-input102">Nombre:&nbsp;<b><?php echo $_SESSION['nombreMadre']; ?></b></label>
					<label class="label-input102">Apellidos:&nbsp;<b><?php echo $_SESSION['apellidoPaternoMadre'].' '.$_SESSION["apellidoMaternoMadre"]; ?></b></label>
					<label class="label-input102">Correo:&nbsp;<b><?php echo $_SESSION['correoMadre']; ?></b></label>
					<label class="label-input102">Celular:&nbsp;<b><?php echo $_SESSION['celularMadre']; ?></b></label>
					<label class="label-input102">Teléfono:&nbsp;<b><?php echo $_SESSION['telefonoMadre']; ?></b></label>
				</div>

				<span class="contact100-form-title">
					Datos del Apoderado
				</span>

				<div class="showInfo">
					<label class="label-input102">RUT:&nbsp;<b><?php echo $_SESSION['rutApoderado']; ?></b></label>
					<label class="label-input102">Nombre:&nbsp;<b><?php echo $_SESSION['nombreApoderado']; ?></b></label>
					<label class="label-input102">Apellidos:&nbsp;<b><?php echo $_SESSION['apellidoPaternoApoderado'].' '.$_SESSION["apellidoMaternoApoderado"]; ?></b></label>
					<label class="label-input102">Parentesco:&nbsp;<b><?php echo $_SESSION['parentesco']; ?></b></label>
					<label class="label-input102">Dirección:&nbsp;<b><?php echo $_SESSION['direccionApoderado']; ?></b></label>
					<label class="label-input102">Correo:&nbsp;<b><?php echo $_SESSION['correoApoderado']; ?></b></label>
					<label class="label-input102">Celular:&nbsp;<b><?php echo $_SESSION['celularApoderado']; ?></b></label>
					<label class="label-input102">Teléfono:&nbsp;<b><?php echo $_SESSION['telefonoApoderado']; ?></b></label>
				</div>

				<div class="container-contact100-form-btn">
					<button id="btnEditar" name="btnEditar" class="contact100-form-btn" formaction="datos_alumno.php">
						Editar Datos
					</button>
				</div>
				<div class="container-contact100-form-btn">
					<button id="btnConfirmar" name="btnConfirmar" class="contact100-form-btn" formaction="guardar.php">
						Confirmar Datos
					</button>
					<p style="color: #FF0000; text-align: center; width: 100%;">Una vez confirmado los datos<br>no podra volver atras para editarlos.</p>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-06.jpg');">
				
				<div class="flex-w size0 p-b-47" id="ver-image-b">
					<center><div class="flex-col size2">
						<span class="txt1 p-b-20">
							<img src="images/logo2.png" style="width: 70%; margin-top: 55px; margin-bottom: 55px;">
						</span>
					</div></center>
				</div>

				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Dirección
						</span>

						<span class="txt2">
							<a class="txt2" target="_blank" href="https://goo.gl/maps/htBXsyfBcoycTZh56">Santa Herminia Poniente 701, Laguna del Sol, Padre Hurtado</a>	
						</span>
					</div>
				</div>

				<!--
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Teléfono
						</span>

						<span class="txt3">
							+56 9 ???? ????
						</span>
					</div>
				</div>
				-->

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Correo
						</span>

						<span class="txt3">
							<a  class="txt3" target="_blank" href="mailto:contacto@bostonacademy.cl">contacto@bostonacademy.cl</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--======================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--======================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--======================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--======================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--======================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--======================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--======================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
<?php
	} else {
		session_destroy();
		header("Location: index.php");
	}
 
?>