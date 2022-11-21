<?php

$path = 'letra.txt';

if(!file_exists($path))
{

    echo "!Archivo no existe!";     

}else{

    //Gestionar aquí conexión a la BD si es de lugar
    $username = "root";
    $password = "desarrollador";
    $database = "boton_pago";
    
    $mysqli = new mysqli("localhost", $username, $password, $database);

    if ($mysqli->connect_errno) {
      printf("Error al conectar: %s\n", $mysqli->connect_error);
      exit();
  }else{
      printf("Conectado: ");
  }

    $sql="INSERT INTO contrato (idContrato, Numero_contrato, Fecha_venc_cuota, Apoderado_idApoderado) VALUES ( ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    $f = fopen($path, "r");

    //Contador para saltar primera línea. Necesario sólo si el csv incluye las cabeceras
    $linea = 0;

    while ($data = fgetcsv($f, 1000, ';', '"')) 
    { 

        $linea++;

        if($linea == 0)
        continue;

        if(current($data)) 
        { 
            $idContrato = $data[0];
            $Numero_contrato = $data[1];
            $Fecha_venc_cuota = $data[2];
            $Apoderado_idApoderado = $data[0];
            $stmt->bind_param('ssss', $idContrato, $Numero_contrato, $Fecha_venc_cuota, $Apoderado_idApoderado);

            //Para fines de depuración
            echo "Insertando: ".$idContrato." <br> ".$Numero_contrato." <br> ".$Fecha_venc_cuota."<br> ".$Apoderado_idApoderado."\n";

            $stmt->execute();
        }

    }

    //Cerrar recursos
    fclose($f);

    $stmt->close();
    $mysqli->close();
}