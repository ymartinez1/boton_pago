<?php
 
	if(isset($_POST["ingresar"])) {

		require("conexion.php");

		$loginRut = $_POST["rut"];

		$buscaUno = "SELECT * FROM pago_en_linea WHERE rutAlumno='$loginRut'";
		$resultadoUno = $mysqli->query($buscaUno);
		$rowUno = $resultadoUno->fetch_array();

		if ($rowUno["rutAlumno"]==$loginRut AND $rowUno["pagado"]=='Pagado') {

			header("Location: index.php?error=login");

		} else {

			$buscaDos = "SELECT rut FROM postulaciones_2020 WHERE rut='$loginRut'";
			$resultadoDos = $mysqli->query($buscaDos);
			$rowDos = $resultadoDos->fetch_array(MYSQLI_ASSOC);

			if ($rowDos["rut"]==$loginRut) {

				$consulta = "SELECT * FROM postulaciones_2020 WHERE rut='$loginRut'";
				if($resultado = $mysqli->query($consulta)) {
					while($row = $resultado->fetch_array()) {

						$rutAlumnoOK = $row["rut"];
						$nombreAlumnoOK = $row["nombreAlumno"];
						$apellidoPatAlumnoOK = $row["apellidoPaterno"];
						$apellidoMatAlumnoOK = $row["apellidoMaterno"];
						$cursoOK = $row["curso"];
					}
					$resultado->close();
				}
				$mysqli->close();

				session_start();
				$_SESSION["logueado"] = TRUE;
				$_SESSION["rutAlumno"] = $rutAlumnoOK;
				$_SESSION["nombreAlumno"] = $nombreAlumnoOK;
				$_SESSION["apellidoPaternoAlumno"] = $apellidoPatAlumnoOK;
				$_SESSION["apellidoMaternoAlumno"] = $apellidoMatAlumnoOK;
				$_SESSION["curso"] = $cursoOK;
				header("Location: datos_alumno.php");

			} else {

				session_start();
				$_SESSION["logueado"] = TRUE;
				header("Location: datos_alumno.php");

			}

		}

	} else {

		session_destroy();
		header("Location: index.php");

	}
 
 ?>