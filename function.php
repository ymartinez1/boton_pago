<?php //Ejemplo aprenderaprogramar.com

$file = fopen("letra.txt", "r");

while(!feof($file)) {

echo fgets($file). "<br />";

}

fclose($file);

?>