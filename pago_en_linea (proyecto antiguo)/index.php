<?php
	if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: index.php");
	}

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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176722071-14"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-176722071-14');
	</script>
</head>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form" autocomplete="off" action="login.php" method="POST">
				<span class="contact100-form-title" id="ver-image-a">
					<img src="images/logo1.png" style="width: 80%; margin-bottom: 15px;">
				</span>
				<span class="contact100-form-title">
					Pago en Línea
				</span>

				<p style="text-align: center; color: #FF2929">
					<b>1° Básico sin cupos disponibles para 2021.</b>
					<br>
					Quienes deseen matricularse en este nivel deben comunicarse con el colegio a través del correo: <b><a href="mailto:contacto@bostonacademy.cl" style="color: #FF2929; text-decoration: underline;">contacto@bostonacademy.cl</a></b> para registrarse en la lista de espera.
				</p>

				<div style="width: 100%">
					<label class="label-input100" for="rut">Ingrese el RUT del alumno (sin puntos y con guion) <span class="obligatorio">*</span></label>
					<div class="wrap-input100">
						<input type="text" class="input100" id="rut" name="rut" placeholder="Ej. 24832029-K" pattern="^[0-9]{7,8}-[0-9Kk]{1}$" title="El RUT debe tener el siguiente formato: 24832029-K." required>
						<span class="focus-input100"></span>
					</div>
					<?php
						if(isset($_GET["error"])) {
						echo '<div class="form-group"><div class="col-md-12 control"><div style="padding-top:15px; font-size:85%; color: red; text-align: center;">El RUT ingresado ya se encuentra en nuestros registros.</div></div></div>';
						}
					?>
				</div>

				<div class="container-contact100-form-btn">
					<button id="ingresar" name="ingresar" class="contact100-form-btn">
						Ingresar
					</button>
				</div>
				
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				
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