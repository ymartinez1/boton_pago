<html lang="es">
<head>
	<title>Pago Fácil | CICV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="images/favicon/favicon_cicv.png" rel="shortcut icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center">
					<img class="logo" src="images/febe-logo.png">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col d-flex align-items-center">
					Buscar:
				</div>
				<div class="col-md-5">
					<input class="form-control fontAwesome" id="myInput" type="text" placeholder="&#xf002;">
				</div>
				<div class="col-md-3">
					<button type="submit" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> DESCARGAR</button>
				</div>
				<div class="col-md-3 ms-auto">
					<button type="submit" class="btn btn-secondary"><i class="fa fa-power-off" aria-hidden="true"></i> SALIR</button>
				</div>
			</div>
			<div class="row justify-content-center">
				<table class="table table-hover">
						<thead>
							<tr>
								<th>Colegio</th>
								<th>Nombre Apoderado</th>
								<th>Correo</th>
								<th>Colegiatura</th>
								<th>Monto</th>
								<th>Vencimiento</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody id="myTable">
							<tr>
								<td>BCAM</td>
								<td>Carolina Andrea<br>Vera Hirsch</td>
								<td>-</td>
								<td>Octubre</td>
								<td>$111.000.-</td>
								<td>05/10/2022</td>
								<td class="status"><span class="vencida">Vencida</span></td>
							</tr>
							<tr>
								<td>BCAM</td>
								<td>Carolina Andrea<br>Vera Hirsch</td>
								<td>-</td>
								<td>Noviembre</td>
								<td>$111.000.-</td>
								<td>05/11/2022</td>
								<td class="status"><span class="vencida">Vencida</span></td>
							</tr>
							<tr>
								<td>BCAM</td>
								<td>Carolina Andrea<br>Vera Hirsch</td>
								<td>-</td>
								<td>Diciembre</td>
								<td>$111.000.-</td>
								<td>05/12/2022</td>
								<td class="status"><span class="active">Próxima a vencer</span></td>
							</tr>
							<tr>
								<td>CICV</td>
								<td>Eduardo Andres<br>Diaz Valenzuela</td>
								<td>correo@correo.cl</td>
								<td>Octubre</td>
								<td>$111.000.-</td>
								<td>05/10/2022</td>
								<td class="status"><span class="pagada">Pagada</span></td>
							</tr>
							<tr>
								<td>CICV</td>
								<td>Eduardo Andres<br>Diaz Valenzuela</td>
								<td>correo@correo.cl</td>
								<td>Noviembre</td>
								<td>$111.000.-</td>
								<td>05/11/2022</td>
								<td class="status"><span class="vencida">Vencida</span></td>
							</tr>
							<tr>
								<td>CICV</td>
								<td>Eduardo Andres<br>Diaz Valenzuela</td>
								<td>correo@correo.cl</td>
								<td>Diciembre</td>
								<td>$111.000.-</td>
								<td>05/12/2022</td>
								<td class="status"><span class="active">Próxima a vencer</span></td>
							</tr>
							<tr>
								<td>CSFP</td>
								<td>Claudia Andrea<br>Lavin Cerda</td>
								<td>-</td>
								<td>Octubre</td>
								<td>$111.000.-</td>
								<td>05/10/2022</td>
								<td class="status"><span class="pagada">Pagada</span></td>
							</tr>
							<tr>
								<td>CSFP</td>
								<td>Claudia Andrea<br>Lavin Cerda</td>
								<td>-</td>
								<td>Noviembre</td>
								<td>$111.000.-</td>
								<td>05/11/2022</td>
								<td class="status"><span class="pagada">Pagada</span></td>
							</tr>
							<tr>
								<td>CSFP</td>
								<td>Claudia Andrea<br>Lavin Cerda</td>
								<td>-</td>
								<td>Diciembre</td>
								<td>$111.000.-</td>
								<td>05/12/2022</td>
								<td class="status"><span class="active">Próxima a vencer</span></td>
							</tr>
						</tbody>
					</table>
			</div>
			<div class="row justify-content-center mt-2">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Siguiente</a>
						</li>
					</ul>
				</nav>
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