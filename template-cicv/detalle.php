<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

	include("php/function.php");

	$all_datos = $_SESSION["datos"];
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
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-2">
					<img class="logo-2" src="images/<?php echo $sigla_colegio; ?>-logo.png">
					<h2 class="heading-section">Hola! Tu RUT es el <b><?php echo $rut_con_formato; ?></b></h2>
					<p>Seleccione la(s) cuotas que quiere pagar:</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>N° Cuota</th>
									<th>Colegiatura</th>
									<th>Monto</th>
									<th>Fecha de vencimiento</th>
									<th>Estado</th>
									<th>
										<label class="checkbox-wrap checkbox-primary">
											<input type="checkbox" onClick="selectAll(this)"><span class="checkmark"></span>
										</label>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$count = count($all_datos);
								for ($a=0; $a < $count; $a++) {
									echo "<tr>";

									$n_cuota = $all_datos[$a]["n_cuota"];
									echo "<td>". $n_cuota ."</td>";

									$fecha_c = $all_datos[$a]["fecha_vencim"];
									$colegiatura = obtener_mes($fecha_c);
									echo "<td>". $colegiatura ."</td>";

									$monto_cuota = $all_datos[$a]["monto_cuota"];
									$monto = mb_substr($monto_cuota, 0, -5);
									$monto_format = number_format($monto, 0, '', '.');
									echo "<td>$". $monto_format .".-</td>";

									$fecha_v = $all_datos[$a]["fecha_vencim"];
									$vence = formateo_fecha($fecha_v);
									echo "<td>". $vence ."</td>";

									$fecha_e = $vence;
									$estado = vencido($fecha_e);
									echo "<td class='status'>". $estado ."</td>";

									$valor_check = $monto;
									echo "<td><label class='checkbox-wrap checkbox-primary'><input class='cuotas-check' type='checkbox' name='foo' attr-price='". $valor_check ."'><span class='checkmark'></span></label></td>";

									echo "</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<form id="monto_pago" name="monto_pago" action="php/metodo.php" method="POST">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-2">
						<h2 class="heading-section">
							Total a pagar: <b><input id="total" name="total" class="input-total" type="text" placeholder="$0.-" disabled></b>
						</h2>
						<span style="display: none;">
							<input id="total_hidden" name="total_hidden" class="input-total" type="text" placeholder="$0.-">
						</span>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-3">
						<button id="salir" name="salir" class="btn btn-secondary mb-2" formaction="php/close.php">SALIR</button>
					</div>
					<div class="col-md-3 ms-auto">
						<button type="submit" id="pagar" name="pagar" class="btn btn-primary mb-2" onClick="checkbox_checked(this)">PAGAR</button>
					</div>
				</div>
			</form>
		</div>
	</section>

	<section class="menssage-section">
		<div class="container">
			<div class="row menssage-row">
				<div class="col-md-4 text-center menssage-border">
					<h2 class="menssage-heading"><i class="fa fa-lock" aria-hidden="true"></i> PAGO 100% SEGURO</b></h2>
					<p>Paga tu cuenta de manera fácil y segura.</p>
				</div>
				<div class="col-md-4 text-center menssage-border">
					<h2 class="menssage-heading">¿AÚN APARECE TU DEUDA?</h2>
					<p>El sistema puede tardar hasta 48 horas para que tu pago se vea reflejado.</p>
				</div>
				<div class="col-md-4 text-center menssage-border ms-auto">
					<h2 class="menssage-heading">RECUERDA</h2>
					<p>Paga el total de tu deuda para evitar morosidad.</p>
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

	<script src="js/add.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php
	} else {
		session_destroy();
		header("Location: https://bostoneduca.cl/pagofacil/rut.php");
	}
?>