<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

	include("php/function.php");

	$total_pago = $_SESSION["total_pago"] ;

	$rut_con_formato = $_SESSION["rut_format"];
	$rut_sin_formato = $_SESSION["rut_no_format"];
	$id_colegio = $_SESSION["id_colegio"];
	
	$sigla_colegio = select_iniciales($id_colegio);
	$mayus_colegio = strtoupper($sigla_colegio);
	$nombre_colegio = select_colegio($id_colegio);
	$url_colegio = select_url($id_colegio);
	$fb_colegio = facebook($id_colegio);
	$ig_colegio = instagram($id_colegio);

	?>
<html lang="es">
<head>
	<title>Pago Fácil | <?php echo $mayus_colegio; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="images/favicon/favicon_<?php echo $sigla_colegio; ?>.png" rel="shortcut icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-2">
				<div class="col-md-6 text-center">
					<img class="logo-2" src="images/<?php echo $sigla_colegio; ?>-logo.png">
					<h2 class="heading-section">Total a pagar: <b><?php echo $total_pago; ?></b></h2>
				</div>
			</div>
			<div class="row text-center mt-3">
				<p>Elige un medio de pago:</p>
			</div>
			<div class="row justify-content-center mb-1">
				<button class="col-md-3 metodo-box rounded m-2">
					<img class="logo-5" src="images/metodos/webpay.png">
				</button>
				<button class="col-md-3 metodo-box rounded m-2" disabled>
					<img class="logo-5" src="images/metodos/servipag.png">
				</button>
			</div>
			<div class="row justify-content-center mt-1 mb-1">
				<button class="col-md-3 metodo-box rounded m-2" disabled>
					<img class="logo-5" src="images/metodos/khipu.png">
				</button>
				<button class="col-md-3 metodo-box rounded m-2" disabled>
					<img class="logo-5" src="images/metodos/getnet.png">
				</button>
			</div>
			<div class="row justify-content-center mt-1 mb-1">
				<button class="col-md-3 metodo-box rounded m-2">
					<img class="logo-5" src="images/metodos/fintoc.png">
				</button>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-3">
					<button onclick="document.location.href='detalle.php'" type="submit" class="btn btn-secondary mb-2">VOLVER</button>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-section">
		<div class="container">
			<div class="row white-text">
				<div class="col-md-10">
					<p>© <a href="<?php echo $url_colegio; ?>"><?php echo $nombre_colegio; ?></a></p>
				</div>
				<div class="col-md-1">
					<a class="icon-rrss" href="<?php echo $fb_colegio; ?>">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-md-1 ms-auto">
					<a class="icon-rrss" href="<?php echo $ig_colegio; ?>">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/main.js"></script>
	<script src="js/add.js"></script>
</body>
</html>
<?php
	} else {
		session_destroy();
		header("Location: https://bostoneduca.cl/pagofacil/rut.php");
	}
?>