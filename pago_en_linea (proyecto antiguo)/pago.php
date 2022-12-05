<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	session_start();
	if($_SESSION["logueado"] == TRUE) {
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
			<div class="contact100-form">
				
				<form autocomplete="off" action="#" method="POST" style="width: 100%">
					<span class="contact100-form-title" id="ver-image-a">
						<img src="images/logo1.png" style="width: 100%;">
					</span>
					<span class="contact100-form-title">
						Resumen
					</span>

					<div class="showInfo">
						<label class="label-input102">RUT Apoderado:&nbsp;<b><?php echo $_SESSION['rutApoderado']; ?></b></label>
						<label class="label-input102">Nombre:&nbsp;<b><?php echo $_SESSION['nombreApoderado']; ?></b></label>
						<label class="label-input102">Apellidos:&nbsp;<b><?php echo $_SESSION['apellidoPaternoApoderado'].' '.$_SESSION["apellidoMaternoApoderado"]; ?></b></label>
						<br>
						<label class="label-input102">RUT Alumno:&nbsp;<b><?php echo $_SESSION["rutAlumno"]; ?></b></label>
						<label class="label-input102">Nombre:&nbsp;<b><?php echo $_SESSION['nombreAlumno']; ?></b></label>
						<label class="label-input102">Apellidos:&nbsp;<b><?php echo $_SESSION['apellidoPaternoAlumno'].' '.$_SESSION["apellidoMaternoAlumno"]; ?></b></label>
						<br>
						<label class="label-input102">Curso:&nbsp;<b><?php echo $_SESSION['curso']; ?></b></label>
						<label class="label-input102">Año:&nbsp;<b><?php echo $_SESSION['anho']; ?></b></label>
						<label class="label-input102">Valor Matrícula:&nbsp;<b><?php echo $_SESSION['valor']; ?></b></label>
					</div>

					<div class="container-contact100-form-btn">
						<button id="btnCancelar" name="btnCancelar" class="contact100-form-btn2" formaction="cancelar.php">
							Vovler al inicio
						</button>
					</div>

				</form>

				<?php

				if ($_SESSION["btnTBK"] == 1) {
					echo '
					<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService" style="text-align: center; width: 100%; padding-top: 23px;">
					<input type="hidden" name="buttonId" value="35aad032ff37c9ab481217b125d46565"/>
					<input type="image" src="https://bostonacademy.cl/wp-content/uploads/2020/07/botonwebpay.png"/>
					</form>
					';
				}elseif ($_SESSION["btnTBK"] == 2) {
					echo '
					<form name="btnPago" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService" style="text-align: center; width: 100%; padding-top: 23px;">
					<input type="hidden" name="buttonId" value="91853e667b778517048bb39d93842e5a"/>
					<input type="image" src="https://bostonacademy.cl/wp-content/uploads/2020/07/botonwebpay.png"/>
					</form>
					';
				}else{
					echo '<label style="text-align: center; width: 100%; padding-top: 23px;"><b>Error al generar el botón de pago.</b></label>';
				}

				?>

			</div>

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
<?php
	} else {
		session_destroy();
		header("Location: index.php");
	}
 
?>