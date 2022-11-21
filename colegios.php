<?php

$username = "root";
$password = "desarrollador";
$database = "boton_pago";
$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM colegios";
$apoderado = "SELECT * FROM apoderado";

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Sigla</font> </td> 
          <td> <font face="Arial">Nombre</font> </td> 
          <td> <font face="Arial">Convenio</font> </td> 


      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["sigla"];
        $field2name = $row["Nombre_col"];
        $field3name = $row["Convenio"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 


              </tr>';
    }
    $result->free();
};
if ($result = $mysqli->query($apoderado)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Rut"];
        $field2name = $row["Nombre"];
        $field3name = $row["Email"];
        $field4name = $row["idApoderado"];



        echo '<tr> 
                    
                  <td>'.$field4name.'</td> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 


              </tr>';
    }
    $result->free();
}  

?>