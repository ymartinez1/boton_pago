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
  $cadena = $array[$a];

  $n_contrato = substr($cadena, 1, 9);
  $n_cuota = substr($cadena, 19, 9);
  $rut_in = substr($cadena, 28, 9);
  $dig_verif = substr($cadena, 37, 1);
  $rut = $rut_in . $dig_verif;
  $nombre_deudor = substr($cadena, 38, 40);
  $direccion = substr($cadena, 78, 40);
  $comuna = substr($cadena, 118, 20);
  $ciudad = substr($cadena, 138, 20);
  $monto_cuota = substr($cadena, 159, 15);
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

$n_contrato = substr($cadena, 1, 9);
$n_cuota = substr($cadena, 19, 9);
$rut_in = substr($cadena, 28, 9);
$dig_verif = substr($cadena, 37, 1);
$rut = $rut_in . $dig_verif;
$nombre_deudor = substr($cadena, 38, 40);
$direccion = substr($cadena, 78, 40);
$comuna = substr($cadena, 118, 20);
$ciudad = substr($cadena, 138, 20);
$monto_cuota = substr($cadena, 159, 15);
$fecha_vencim = substr($cadena, 174, 8);

echo "Cantidad registros: " . $count . "<br>";
echo "Cadena original: " . $cadena . "<br>";
echo "---------------<br>";
echo "N° de contrato: " . $n_contrato . "<br>";
echo "N° de couta: " . $n_cuota . "<br>";
echo "Rut: " . $rut . "<br>";
echo "Nombre deudor: " . $nombre_deudor . "<br>";
echo "Dirección: " . $direccion . "<br>";
echo "Comuna: " . $comuna . "<br>";
echo "Ciudad: " . $ciudad . "<br>";
echo "Monto cuota: " . $monto_cuota . "<br>";
echo "Fecha vencimiento: " . $fecha_vencim . "<br>";

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