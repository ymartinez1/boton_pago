<?php 
session_start();
$usuario = $_SESSION['username'];
echo "<h1>BIENVENIDO	$username </H1> ";
?>
<html lang="es">
<head>
	<title>CICV - Pago Fácil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cicv.cl/wp-content/uploads/2022/10/favicon.png" rel="shortcut icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-2">
					<img class="logo-5" src="images/cicv-logo.png">
					<h2 class="heading-section">Hola! Tu RUT es el <b>18.864.313-2</b></h2>
					<p>Seleccione la(s) cuotas que quiere pagar:</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
							<thead>
								<tr>
									<th>N° de contrato</th>
									<th>Cuota</th>
									<th>Monto</th>
									<th>Estado</th>
									<th>
										<label class="checkbox-wrap checkbox-primary">
											<input type="checkbox" onClick="selectAll(this)">
											<span class="checkmark"></span>
										</label>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr class="alert" role="alert">
									<td>00097531</td>
									<td class="d-flex align-items-center">
										<div class="cuota">
											<span>Cuota Octubre</span>
											<span>Alumno 01</span>
										</div>
									</td>
									<td>$80.000-</td>
									<td class="status"><span class="vencida">Vencida</span></td>
									<td>
										<label class="checkbox-wrap checkbox-primary">
											<input class="cuotas-check" type="checkbox" name="foo" attr-price="80000">
											<span class="checkmark"></span>
										</label>
									</td>
								</tr>
								<tr class="alert" role="alert">
									<td>00086420</td>
									<td class="d-flex align-items-center">
										<div class="cuota">
											<span>Cuota Octubre</span>
											<span>Alumno 02</span>
										</div>
									</td>
									<td>$70.000-</td>
									<td class="status"><span class="vencida">Vencida</span></td>
									<td>
										<label class="checkbox-wrap checkbox-primary">
											<input class="cuotas-check" type="checkbox" name="foo" attr-price="70000">
											<span class="checkmark"></span>
										</label>
									</td>
								</tr>
								<tr class="alert" role="alert">
									<td>00097531</td>
									<td class="d-flex align-items-center">
										<div class="cuota">
											<span>Cuota Noviembre</span>
											<span>Alumno 01</span>
										</div>
									</td>
									<td>$80.000-</td>
									<td class="status"><span class="active">Próxima a vencer</span></td>
									<td>
										<label class="checkbox-wrap checkbox-primary">
											<input class="cuotas-check" type="checkbox" name="foo" attr-price="80000">
											<span class="checkmark"></span>
										</label>
									</td>
								</tr>
								<tr class="alert" role="alert">
									<td>00086420</td>
									<td class="d-flex align-items-center">
										<div class="cuota">
											<span>Cuota Noviembre</span>
											<span>Alumno 02</span>
										</div>
									</td>
									<td>$70.000-</td>
									<td class="status"><span class="active">Próxima a vencer</span></td>
									<td>
										<label class="checkbox-wrap checkbox-primary">
											<input class="cuotas-check" type="checkbox" name="foo" attr-price="70000">
											<span class="checkmark"></span>
										</label>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-2">
					<h2 class="heading-section">
						Total a pagar: <b><input id="total" class="input-total" type="text" placeholder="$0-" disabled></b>
					</h2>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3">
					<button type="submit" class="btn btn-secondary mb-2">SALIR</button>
				</div>
				<div class="col-md-3 ms-auto">
					<button type="submit" class="btn btn-primary mb-2">CONTINUAR</button>
				</div>
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