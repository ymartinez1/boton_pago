<?php

$cadena = "2022110019         0000000010122757676CORTES ULLOA LORENA AMALIA              ALCALDE HERNAN PRIETO CASA 14 LOTE E    PIRQUE              SANTIAGO            000001110000000005032022NN      ";

$cadena2 = "2022110019---------0000000010122757676CORTES-ULLOA-LORENA-AMALIA--------------ALCALDE-HERNAN-PRIETO-CASA-14-LOTE-E----PIRQUE--------------SANTIAGO------------000001110000000005032022NN------";

$a = substr($cadena, 0, 1);
$b = substr($cadena, 1, 9);
$c = substr($cadena, 10, 9);
$d = substr($cadena, 19, 9);
$e = substr($cadena, 28, 9);
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
echo "Rut Aceptante: " . $e . "<br><br>";
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

?>