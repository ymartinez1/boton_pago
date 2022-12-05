<?php
 
	session_start();
	if($_SESSION["logueado"] == TRUE) {
		$_SESSION["rutPadre"] = $_POST["rutPadre"];
		$_SESSION["nombrePadre"] = $_POST["nombrePadre"];
		$_SESSION["apellidoPaternoPadre"] = $_POST["apellidoPaternoPadre"];
		$_SESSION["apellidoMaternoPadre"] = $_POST["apellidoMaternoPadre"];
		$_SESSION["correoPadre"] = $_POST["correoPadre"];
		$_SESSION["celularPadre"] = $_POST["celularPadre"];
		$_SESSION["telefonoPadre"] = $_POST["telefonoPadre"];
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
			<form class="contact100-form" autocomplete="off" action="datos_apoderado.php" method="POST">
				<span class="contact100-form-title" id="ver-image-a">
					<img src="images/logo1.png" style="width: 100%;">
				</span>
				<span class="contact100-form-title">
					Datos de la Madre
				</span>

				<label class="label-input100" for="rutMadre">Ingrese RUT Madre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input id="rutMadre" class="input100" type="text" name="rutMadre" placeholder="Ej. 24832029-K" pattern="^[0-9]{7,8}-[0-9Kk]{1}$" title="El RUT debe tener el siguiente formato: 24832029-K." required value="<?php echo $_SESSION['rutMadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="nombreMadre">Ingrese Nombre Madre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input id="nombreMadre" class="input100" type="text" name="nombreMadre" placeholder="Nombre Completo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['nombreMadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="apellidoPaternoMadre">Ingrese Apellidos Madre<span class="obligatorio">*</span></label>
				<div class="wrap-input100 rs1-wrap-input100">
					<input id="apellidoPaternoMadre" class="input100" type="text" name="apellidoPaternoMadre" placeholder="Apellido Paterno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['apellidoPaternoMadre']; ?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100">
					<input class="input100" type="text" name="apellidoMaternoMadre" placeholder="Apellido Materno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['apellidoMaternoMadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="correoMadre">Ingrese un Correo de la Madre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input id="correoMadre" class="input100" type="text" name="correoMadre" placeholder="Ej. ejemplo@email.cl" pattern="^[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}$" title="Ingrese un correo válido" required value="<?php echo $_SESSION['correoMadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="celularMadre">Ingrese un n° de Celular de la Madre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input id="celularMadre" class="input100" type="text" name="celularMadre" placeholder="Ej. 943218765" pattern="^[9][0-9]{8}$" title="Ingrese un 9 + los 8 dígitos del celular" maxlength="9" required value="<?php echo $_SESSION['celularMadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="telefonoMadre">Ingrese un n° de Teléfono de la Madre*</label>
				<div class="wrap-input100">
					<input id="telefonoMadre" class="input100" type="text" name="telefonoMadre" placeholder="Ej. 27654321" pattern="^[2][0-9]{7}$" title="Ingrese un 2 + los 7 dígitos del teléfono" maxlength="8" value="<?php echo $_SESSION['telefonoMadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button id="btnMadre" name="btnMadre" class="contact100-form-btn">
						Siguente
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-04.jpg');">
				
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