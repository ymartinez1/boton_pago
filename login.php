
<?php

if(isset($_POST['btn1']))
{
    include("databaseconnect.php");
        $Rut = $_POST['Rut'];
        $resultados = mysqli_query($conn, "SELECT * FROM apoderado INNER JOIN contrato ON apoderado.idApoderado = contrato.Apoderado_idApoderado WHERE Rut = $Rut");
        while($consulta = mysqli_fetch_array($resultados))
        {
            echo $consulta['Nombre'];
            echo "<br>";
            echo $consulta['Numero_contrato'];
            echo "<br>";
        }
    include("databasedisconnect.php");

}

?>