<?php
 
	session_start();
	if($_SESSION["logueado"] == TRUE) {
		$_SESSION["rutAlumno"] = $_POST["rutAlumno"];
		$_SESSION["nombreAlumno"] = $_POST["nombreAlumno"];
		$_SESSION["apellidoPaternoAlumno"] = $_POST["apellidoPaternoAlumno"];
		$_SESSION["apellidoMaternoAlumno"] = $_POST["apellidoMaternoAlumno"];
		$_SESSION["curso"] = $_POST["curso"];
		$_SESSION["anho"] = $_POST["anho"];

		if ($_SESSION["curso"]=='Jardín Medio Menor') {
			$valor = '$236.000';
			$btnTBK = 1;
		} elseif ($_SESSION["curso"]=='Jardín Medio Mayor') {
			$valor = '$236.000';
			$btnTBK = 1;
		} elseif ($_SESSION["curso"]=='Prekinder') {
			$valor = '$236.000';
			$btnTBK = 1;
		}elseif ($_SESSION["curso"]=='Kinder') {
			$valor = '$236.000';
			$btnTBK = 1;
		}elseif ($_SESSION["curso"]=='1ro básico') {
			$valor = '$282.000';
			$btnTBK = 2;
		}elseif ($_SESSION["curso"]=='2do básico') {
			$valor = '$282.000';
			$btnTBK = 2;
		}elseif ($_SESSION["curso"]=='3ro básico') {
			$valor = '$282.000';
			$btnTBK = 2;
		}elseif ($_SESSION["curso"]=='4to básico') {
			$valor = '$282.000';
			$btnTBK = 2;
		}elseif ($_SESSION["curso"]=='5to básico') {
			$valor = '$282.000';
			$btnTBK = 2;
		}elseif ($_SESSION["curso"]=='6to básico') {
			$valor = '$282.000';
			$btnTBK = 2;
		}
		$_SESSION["valor"] = $valor;
		$_SESSION["btnTBK"] = $btnTBK;
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
			<form class="contact100-form" autocomplete="off" action="datos_madre.php" method="POST">
				<span class="contact100-form-title" id="ver-image-a">
					<img src="images/logo1.png" style="width: 100%;">
				</span>
				<span class="contact100-form-title">
					Datos del Padre
				</span>

				<label class="label-input100" for="rutPadre">Ingrese RUT Padre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="rutPadre" name="rutPadre" placeholder="Ej. 24832029-K" pattern="^[0-9]{7,8}-[0-9Kk]{1}$" title="El RUT debe tener el siguiente formato: 24832029-K." required value="<?php echo $_SESSION['rutPadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="nombrePadre">Ingrese Nombre Padre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="nombrePadre" name="nombrePadre" placeholder="Nombre Completo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['nombrePadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="apellidoPaternoPadre">Ingrese Apellidos Padre<span class="obligatorio">*</span></label>
				<div class="wrap-input100 rs1-wrap-input100">
					<input type="text" class="input100" id="apellidoPaternoPadre" name="apellidoPaternoPadre" placeholder="Apellido Paterno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['apellidoPaternoPadre']; ?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100">
					<input type="text" class="input100" id="apellidoMaternoPadre" name="apellidoMaternoPadre" placeholder="Apellido Materno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['apellidoMaternoPadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="correoPadre">Ingrese un Correo del Padre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="correoPadre" name="correoPadre" placeholder="Ej. ejemplo@email.cl" pattern="^[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}$" title="Ingrese un correo válido" required value="<?php echo $_SESSION['correoPadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="celularPadre">Ingrese un n° de Celular del Padre<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="celularPadre" name="celularPadre" placeholder="Ej. 943218765" pattern="^[9][0-9]{8}$" title="Ingrese un 9 + los 8 dígitos del celular" maxlength="9" required value="<?php echo $_SESSION['celularPadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="telefonoPadre">Ingrese un n° de Teléfono del Padre*</label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="telefonoPadre" name="telefonoPadre" placeholder="Ej. 27654321" pattern="^[2][0-9]{7}$" title="Ingrese un 2 + los 7 dígitos del teléfono" maxlength="8" value="<?php echo $_SESSION['telefonoPadre']; ?>">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button id="btnPadre" name="btnPadre" class="contact100-form-btn">
						Siguente
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-03.jpg');">
				
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