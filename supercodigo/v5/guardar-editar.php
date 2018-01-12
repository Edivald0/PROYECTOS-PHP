<?php
	include ("../v3/conexion.php");
	//$conexion = new mysqli ("localhost", "root", "", "conexion");
	$nombre = $_POST[ 'nombre' ];
	$apellidop = $_POST[ 'apellidop' ];
	$apellidom = $_POST[ 'apellidom' ];
	$correo = $_POST[ 'correo' ];
	$password = $_POST[ 'password' ];

	if (isset($_POST['envio'])) {
		$conexion->query("UPDATE conexion1 SET nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', correo = '$correo', password = '$password'  WHERE id = '{$_POST[ 'id' ]}' ");
			echo "Datos insertados";
	}



		?>
		<a href="../v4/index.php">Inicio</a>