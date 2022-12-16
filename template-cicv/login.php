<html lang="es">
<head>
	<title>Pago Fácil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cicv.cl/wp-content/uploads/2022/10/favicon.png" rel="shortcut icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

	<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>

	<?php require_once "php/php-catcha.php"; ?>
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center">
					<img class="logo" src="images/febe-logo.png">
				</div>
			</div>
			<div class="row justify-content-center mt-3 mb-3">
				<div class="col-md-4 text-center shadow-lg p-5 bg-white rounded">
					<div class="mb-3">
						<h2 class="heading-section">Iniciar sesión</h2>
					</div>
					<div class="mb-3">
						<input type="text" class="form-control" placeholder="Usuario">
					</div>
					<div class="mb-3">
						<input type="password" class="form-control" placeholder="Contraseña">
					</div>
					<div class="mb-3">
						<div class="g-recaptcha" data-sitekey="6Ld9NiAjAAAAALPthhVN7bfp73ffdt1LEptYyZ6I"></div>
					</div>
					<button id="entrar" class="btn btn-primary w-100">ENTRAR</button>
					<div class="mb-3">
						<hr class="hr-login">
					</div>
					<div class="mb-3">
						<a class="link" href="#">¿Has olvidado tu contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-section">
		<div class="container">
			<div class="row white-text">
				<div class="col-md-10">
					<p>© <a href="https://bostoneduca.cl/">Fundación BostonEduca</a></p>
				</div>
				<div class="col-md-1">
					<a class="icon-rrss" href="https://www.facebook.com/BostonEduca/">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-md-1 ms-auto">
					<a class="icon-rrss" href="https://www.instagram.com/bostoneduca/">
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