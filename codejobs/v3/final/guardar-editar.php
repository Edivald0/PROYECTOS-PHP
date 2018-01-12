<!DOCTYPE html>
<html>
<head>
	<title>Datos Guardados</title>
</head>
<body>
	<?php 
		include ("conexion.php");
		$nombre = $_POST[ 'nombre' ];
		$apellidop = $_POST[ 'apellidop' ];
		$apellidom = $_POST[ 'apellidom' ];
		$correo = $_POST[ 'correo' ];
		$password = $_POST[ 'password' ];
		$identificador = $_POST[ 'identificador' ];
		$envio = $_POST[ 'envio-date-edit' ];
		if (isset($envio)) {
			$conexion->query("UPDATE conexion1 SET nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', correo = '$correo', password = '$password' WHERE id = '$identificador' ");
			header("location: imprimir.php");
		}
	?>
</body>
</html>