<html>
 <head>
  <title>Prueba de PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

 </head>
 <body>
<div class="container">
    <form action="index.php" method="post">
        idApoderado: <input type="text" name = "field1" /><br/>
        Rut: <input type="text" name = "field2" /><br/>
        Nombre: <input type="text" name = "field3" /><br/>
        Apellido: <input type="text" name = "field4" /><br/>
        Email: <input type="text" name = "field5" /><br/>
        Direccion: <input type="text" name = "field6" /><br/>

        <input type="submit" />
    </form>
</div>
 <?php echo '<p>Hola Mundo</p>'; echo '<p>Hola GonFikar/p>'; ?>

<?php
$username = "root";
$password = "desarrollador";
$database = "boton_pago";
$mysqli = new mysqli("localhost", $username, $password, $database);

$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);
$field4 = $mysqli->real_escape_string($_POST['field4']);
$field5 = $mysqli->real_escape_string($_POST['field5']);
$field6 = $mysqli->real_escape_string($_POST['field6']);

$query = "INSERT INTO apoderado (idApoderado, Rut, Nombre, Apellido, Email, Direccion)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}')";


$mysqli->query($query);

$query = "SELECT * FROM apoderado";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">idApoderado</font> </td> 
          <td> <font face="Arial">Rut</font> </td> 
          <td> <font face="Arial">Nombre</font> </td> 
          <td> <font face="Arial">Apellido</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Direccion</font> </td> 

      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["idApoderado"];
        $field2name = $row["Rut"];
        $field3name = $row["Nombre"];
        $field4name = $row["Apellido"];
        $field5name = $row["Email"]; 
        $field6name = $row["Direccion"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 

              </tr>';
    }
    $result->free();
} 
$mysqli->close();
?>
</div>
</body>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>