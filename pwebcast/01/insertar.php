<?php
	include ("conexion.php");

	$titulo = $_POST['titulo'];
	$nota = $_POST['nota'];
	$date = $_POST['date'];

	//consulta 	
	$insertar = "INSERT INTO notas (titulo, nota, date) VALUES ('$titulo', '$nota', '$date')";

	//ejecutar
	$resultado = mysqli_query($conexion, $insertar);
	if (!$resultado) {
		echo "Error al Registrar";
	}else{
		echo "Registro Exitoso";
	}
	//Cerrar
	mysqli_close($conexion);




?>
