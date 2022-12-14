<html lang="es">
<head>
	<title>Pago Fácil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="images/favicon/favicon_cicv.png" rel="shortcut icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

	<!--<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>-->

	<?php // require_once "php/php-catcha.php"; ?>
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center">
					<img class="logo-2" src="images/cicv-logo.png">
				</div>
			</div>
			<div class="row justify-content-center mt-5 mb-5">
				<form class="col-md-4 text-center shadow-lg p-5 bg-white rounded" autocomplete="off" action="php/log.php" method="POST">
					<div class="mb-3">
						<h2 class="heading-section">Revisa tu deuda</h2>
					</div>
					<div class="mb-3">
						<p>Escribe tu RUT a continuación:</p>
					</div>
					<div class="mb-3">
						<input type="text" class="form-control" id="rut" name="rut" aria-describedby="rut" placeholder="Ejemplo: 11222333-K">
						<p class="tiny-text" id="msgerror"></p>
					</div>
					<!--<div class="mb-3">
						<div class="g-recaptcha" data-sitekey="6Ld9NiAjAAAAALPthhVN7bfp73ffdt1LEptYyZ6I"></div>
					</div>-->
					<button type="submit" id="consultar" name="consultar" class="btn btn-primary w-100">CONSULTAR</button>
				</form>
			</div>
		</div>
	</section>
	<section class="footer-section">
		<div class="container">
			<div class="row white-text">
				<div class="col-md-10">
					<p>© <a href="https://cicv.cl/">Colegio Inmaculada Concepción de Vitacura</a></p>
				</div>
				<div class="col-md-1">
					<a class="icon-rrss" href="https://www.facebook.com/cicv.cl">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-md-1 ms-auto">
					<a class="icon-rrss" href="https://www.instagram.com/cicv.cl/">
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