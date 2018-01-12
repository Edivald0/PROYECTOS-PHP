<?php
	include ("../v3/conexion.php");
	//$conexion = new mysqli ("localhost", "root", "", "conexion");
	$nombre = $_POST[ 'nombre' ];
	$apellidop = $_POST[ 'apellidop' ];
	$apellidom = $_POST[ 'apellidom' ];
	$correo = $_POST[ 'correo' ];
	$password = $_POST[ 'password' ];

	if (isset($_POST['envio'])) {
		$conexion->query("INSERT INTO conexion1 (nombre, apellidop, apellidom, correo, password) VALUES ('$nombre', '$apellidop', '$apellidom', '$correo', '$password')");
			echo "Datos insertados";
	}



		?>
		<a href="../v4/index.php">Inicio</a>