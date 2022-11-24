
<?php

$file = fopen("letra.txt","r");

$i = 0;
$var = [];

while(! feof($file))
{
  $var[$i] = fgets($file);
  $i++;
}

$e = 0;

while($e <= $i) {
  echo $var[$e] . '<br><br>' .'';
  $e++;
}

fclose($file);

$cadena = $var[1];

$a = substr($cadena, 0, 1);
$b = substr($cadena, 1, 9);
$c = substr($cadena, 10, 9);
$d = substr($cadena, 19, 9);
$e = substr($cadena, 29, 9);
$f = substr($cadena, 37, 1);
$g = substr($cadena, 38, 40);
$h = substr($cadena, 78, 40);
$i = substr($cadena, 118, 20);
$j = substr($cadena, 138, 20);
$k = substr($cadena, 158, 1);
$l = substr($cadena, 159, 15);
$m = substr($cadena, 174, 8);
$n = substr($cadena, 182, 1);
$o = substr($cadena, 183, 1);
$p = substr($cadena, 184, 6);

echo "Cadena Original: " . $cadena . "<br><br>";
echo "Tipo de Registro: " . $a . "<br><br>";
echo "Numero de ODV: " . $b . "<br><br>";
echo "Filler: " . $c . "<br><br>";
echo "Segundo Identificador: " . $d . "<br><br>";
echo "Rut Aceptante: " . formateo_rut($e) . "<br><br>";
echo "Dígito Verificador: " . $f . "<br><br>";
echo "Nombre Deudor: " . $g . "<br><br>";
echo "Dirección: " . $h . "<br><br>";
echo "Comuna: " . $i . "<br><br>";
echo "Ciudad: " . $j . "<br><br>";
echo "Código Moneda: " . $k . "<br><br>";
echo "Monto Cuota: " . $l . "<br><br>";
echo "Fecha Vencimiento: " . $m . "<br><br>";
echo "Recargo: " . $n . "<br><br>";
echo "Descuento Pronto Pago: " . $o . "<br><br>";
echo "Filler: " . $p . "<br><br>";

function formateo_rut($e){
  $p1 = substr($e, 0,2);
  $p2 = substr($e, 2,3);
  $p3 = substr($e, 5,3);
  $p4 = substr($e, 8);
  return $p1.".".$p2.".".$p3."-".$p4;
}
?> 