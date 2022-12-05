<?php
 
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
			<form class="contact100-form" autocomplete="off" action="datos_padre.php" method="POST">
				<span class="contact100-form-title" id="ver-image-a">
					<img src="images/logo1.png" style="width: 100%;">
				</span>
				<span class="contact100-form-title">
					Datos del Alumno
				</span>

				<label class="label-input100" for="rutAlumno">Ingrese RUT Alumno<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="rutAlumno" name="rutAlumno" placeholder="Ej. 24832029-K" pattern="^[0-9]{7,8}-[0-9Kk]{1}$" title="El RUT debe tener el siguiente formato: 24832029-K." required value="<?php echo $_SESSION['rutAlumno']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="nombreAlumno">Ingrese Nombre Alumno<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<input type="text" class="input100" id="nombreAlumno" name="nombreAlumno" placeholder="Nombre Completo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['nombreAlumno']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="apellidoPaternoAlumno">Ingrese Apellidos Alumno<span class="obligatorio">*</span></label>
				<div class="wrap-input100 rs1-wrap-input100">
					<input type="text" class="input100" id="apellidoPaternoAlumno" name="apellidoPaternoAlumno" placeholder="Apellido Paterno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['apellidoPaternoAlumno']; ?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100">
					<input type="text" class="input100" id="apellidoMaternoAlumno" name="apellidoMaternoAlumno" placeholder="Apellido Materno"  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" title="Ingrese solo letras" required value="<?php echo $_SESSION['apellidoMaternoAlumno']; ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="curso">Ingrese el Curso<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<select class="input100" id="curso" name="curso" required>
						<option value="">Seleccione el curso</option>
						<option value="Jardín Medio Menor" <?php if($_SESSION['curso']=='Jardín Medio Menor') echo 'selected'; ?>>Jardín Medio Menor</option>
						<option value="Jardín Medio Mayor" <?php if($_SESSION['curso']=='Jardín Medio Mayor') echo 'selected'; ?>>Jardín Medio Mayor</option>
						<option value="Prekinder" <?php if($_SESSION['curso']=='Prekinder') echo 'selected'; ?>>Prekinder</option>
						<option value="Kinder" <?php if($_SESSION['curso']=='Kinder') echo 'selected'; ?>>Kinder</option>
						<!--
							<option value="1ro básico" <?php /* if($_SESSION['curso']=='1ro básico') echo 'selected'; */ ?>>1° básico</option>
						-->
						<option value="2do básico" <?php if($_SESSION['curso']=='2do básico') echo 'selected'; ?>>2° básico</option>
						<option value="3ro básico" <?php if($_SESSION['curso']=='3ro básico') echo 'selected'; ?>>3° básico</option>
						<option value="4to básico" <?php if($_SESSION['curso']=='4to básico') echo 'selected'; ?>>4° básico</option>
						<option value="5to básico" <?php if($_SESSION['curso']=='5to básico') echo 'selected'; ?>>5° básico</option>
						<option value="6to básico" <?php if($_SESSION['curso']=='6to básico') echo 'selected'; ?>>6° básico</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="anho">Ingrese el Año de postulación<span class="obligatorio">*</span></label>
				<div class="wrap-input100">
					<select class="input100" id="anho" name="anho" required>
						<option value="">Seleccione el año</option>
						<option value="2021" <?php if($_SESSION['anho']=='2021') echo 'selected'; ?>>2021</option>
						<option value="2022" <?php if($_SESSION['anho']=='2022') echo 'selected'; ?>>2022</option>
						<option value="2023" <?php if($_SESSION['anho']=='2023') echo 'selected'; ?>>2023</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button id="btnAlumno" name="btnAlumno" class="contact100-form-btn">
						Siguente
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-02.jpg');">
				
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