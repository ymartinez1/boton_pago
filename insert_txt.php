<?php

$file = fopen("texto.txt","r");
$count = 0;
$array = [];
$matriz = [];
$header = 0;
$footer = 0;

while(!feof($file)) {
  $row = fgets($file);
  if($row != "") {
    $num = substr($row, 0, 1);
    if($num == 1){
      $header = $row;
    }else if ($num == 2) {
      $array[$count] = $row;
      $count++;
    }
  }
}

fclose($file);

$header_num_colegio = substr($header, 1, 4);

for ($a=0; $a < $count; $a++) {
  $cadena = $array[$a];

  $n_contrato = mb_substr($cadena, 1, 9);
  $n_cuota = mb_substr($cadena, 19, 9);
  $rut_in = mb_substr($cadena, 28, 9);
  $dig_verif = mb_substr($cadena, 37, 1);
  $rut = $rut_in . $dig_verif;
  $nombre_deudor = mb_substr($cadena, 38, 40);
  $direccion = mb_substr($cadena, 78, 40);
  $comuna = mb_substr($cadena, 118, 20);
  $ciudad = mb_substr($cadena, 138, 20);
  $monto_cuota = mb_substr($cadena, 159, 15);
  $fecha_vencim = mb_substr($cadena, 174, 8);

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

// SOLO PARA REVISAR EL PRIMER REGISTRO
$cadena = $array[0];
$n_contrato = mb_substr($cadena, 1, 9);
$n_cuota = mb_substr($cadena, 19, 9);
$rut_in = mb_substr($cadena, 28, 9);
$dig_verif = mb_substr($cadena, 37, 1);
$rut = $rut_in . $dig_verif;
$nombre_deudor = mb_substr($cadena, 38, 40);
$direccion = mb_substr($cadena, 78, 40);
$comuna = mb_substr($cadena, 118, 20);
$ciudad = mb_substr($cadena, 138, 20);
$monto_cuota = mb_substr($cadena, 159, 15);
$fecha_vencim = mb_substr($cadena, 174, 8);
echo "Cantidad Registros: " . $count . "<br>";
echo "---------------<br><br>";
echo "Código Colegio (Header): " . $header . "<br>";
echo "Registro Original: " . $cadena . "<br>";
echo "---------------<br><br>";
echo "N° de Contrato: " . $n_contrato . "<br>";
echo "N° de Couta: " . $n_cuota . "<br>";
echo "Rut: " . $rut . "<br>";
echo "Nombre Deudor: " . $nombre_deudor . "<br>";
echo "Dirección: " . $direccion . "<br>";
echo "Comuna: " . $comuna . "<br>";
echo "Ciudad: " . $ciudad . "<br>";
echo "Monto Cuota: " . $monto_cuota . "<br>";
echo "Fecha Vencimiento: " . $fecha_vencim . "<br>";
echo "---------------<br><br>";
//-------------------------------------

echo "num_colegio: " . $header_num_colegio . "<br>";

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