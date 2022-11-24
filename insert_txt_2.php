<?php

$file = fopen("texto.txt","r");
$count = 0;
$array = [];
$matriz = [];

while(!feof($file)) {
  $row = fgets($file);
  if($row != "") {
    $two = substr($row, 0, 1);
    if ($two == 2) {
      $array[$count] = $row;
      $count++;
    }
  }
}

fclose($file);

for ($a=0; $a < $count; $a++) {
  $cadena = strtolower($array[$a]);

  $n_contrato_r = substr($cadena, 1, 9);
  $n_contrato = ltrim($n_contrato_r, "0");

  $n_cuota_r = substr($cadena, 19, 9);
  $n_cuota = ltrim($n_cuota_r, "0");

  $rut_in_r = substr($cadena, 28, 9);
  $rut_in = ltrim($rut_in_r, "0");
  $dig_verif = substr($cadena, 37, 1);
  $rut = $rut_in . $dig_verif;

  $nombre_deudor_r = substr($cadena, 38, 40);
  $nombre_deudor = ucwords(trim($nombre_deudor_r));

  $direccion_r = substr($cadena, 78, 40);
  $direccion = ucwords(trim($direccion_r));

  $comuna_r = substr($cadena, 118, 20);
  $comuna = ucwords(trim($comuna_r));

  $ciudad_r = substr($cadena, 138, 20);
  $ciudad = ucwords(trim($ciudad_r));

  $monto_cuota_r = substr($cadena, 159, 15);
  $monto_cuota_s = ltrim($monto_cuota_r, "0");
  $monto_cuota = substr($monto_cuota_s, 0, -5);

  $fecha_vencim = substr($cadena, 174, 8);

  $matriz[$a][0] = $n_contrato;
  $matriz[$a][1] = $n_cuota;
  $matriz[$a][2] = $rut;
  $matriz[$a][3] = $nombre_deudor;
  $matriz[$a][4] = $direccion;
  $matriz[$a][5] = $comuna;
  $matriz[$a][6] = $ciudad;
  $matriz[$a][7] = $monto_cuota;
  $matriz[$a][8] = $fecha_vencim;
}

/*
$u = 0;
while($u <= $count) {
  echo $array[$u] . '<br>' . '';
  $u++;
}
*/

$cadena = $array[0];

$n_contrato_r = substr($cadena, 1, 9);
$n_contrato = ltrim($n_contrato_r, "0");

$n_cuota_r = substr($cadena, 19, 9);
$n_cuota = ltrim($n_cuota_r, "0");

$rut_in_r = substr($cadena, 28, 9);
$rut_in = ltrim($rut_in_r, "0");
$dig_verif = substr($cadena, 37, 1);
$rut = $rut_in . $dig_verif;

$nombre_deudor_r = substr($cadena, 38, 40);
$nombre_deudor = ucwords(strtolower($nombre_deudor_r));

$direccion_r = substr($cadena, 78, 40);
$direccion = ucwords(strtolower($direccion_r));

$comuna_r = substr($cadena, 118, 20);
$comuna = ucwords(strtolower($comuna_r));

$ciudad_r = substr($cadena, 138, 20);
$ciudad = ucwords(strtolower($ciudad_r));

$monto_cuota_r = substr($cadena, 159, 15);
$monto_cuota_s = ltrim($monto_cuota_r, "0");
$monto_cuota = substr($monto_cuota_s, 0, -5);

$fecha_vencim = substr($cadena, 174, 8);

echo "Cantidad Registros: " . $count . "<br>";
echo "---------------<br>";
echo "Registro Original: " . $cadena . "<br>";
echo "---------------<br>";
echo "N° de Contrato: " . $n_contrato . "<br>";
echo "N° de Couta: " . $n_cuota . "<br>";
echo "Rut: " . $rut . "<br>";
echo "Nombre Deudor: " . $nombre_deudor . "<br>";
echo "Dirección: " . $direccion . "<br>";
echo "Comuna: " . $comuna . "<br>";
echo "Ciudad: " . $ciudad . "<br>";
echo "Monto Cuota: " . $monto_cuota . "<br>";
echo "Fecha Vencimiento: " . $fecha_vencim . "<br>";

echo "<pre>";
print_r($matriz);
echo "</pre>";

/*
function formateo_rut($e){
  $p1 = substr($e, 0,2);
  $p2 = substr($e, 2,3);
  $p3 = substr($e, 5,3);
  $p4 = substr($e, 8);
  return $p1.".".$p2.".".$p3."-".$p4;
}
*/

?> 