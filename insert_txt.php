<?php

$file = fopen("texto.txt","r");
$count = 0;
$array = [];
$matriz = [];
$header = 0;

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

$id_colegio = mb_substr($header, 1, 4);

//require("connect.php");

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

  $matriz[$a][0] = $id_colegio;
  $matriz[$a][1] = $n_contrato;
  $matriz[$a][2] = $n_cuota;
  $matriz[$a][3] = $rut;
  $matriz[$a][4] = $nombre_deudor;
  $matriz[$a][5] = $direccion;
  $matriz[$a][6] = $comuna;
  $matriz[$a][7] = $ciudad;
  $matriz[$a][8] = $monto_cuota;
  $matriz[$a][9] = $fecha_vencim;

  //Consulta para guardar en la base de datos
  //$insert = "INSERT INTO nombre_bd(nombre_columna_1, nombre_columna_2, nombre_columna_3, etc) VALUES ('$id_colegio', '$n_contrato', '$n_cuota', 'etc')";
  //$save = mysqli_query($mysqli, $insert);
}

//require("close_connect.php");

//-------------------------------------------

echo "Cantidad Registros: " . $count . "<br>";
echo "---------------<br>";
echo "Primera Línea (Header): " . $header . "<br>";
echo "Registro Original: " . $array[0] . "<br>";
echo "---------------<br><br>";

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