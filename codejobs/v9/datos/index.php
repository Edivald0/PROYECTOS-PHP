<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
</head>
<body>
	
	<?php
		
		include 'nombre.php';
		include 'apellido.php';
		include "edad.php";
	
		//Asignacion de variables (Se pasan los parametros)
			$datos1 = new Persona1( 'Edivaldo', 'Martinez');
			$datos2 = new Persona2( 'Emma', 'Ortega' );

			
			echo $datos1->nombre();
			echo "<br>";
			echo $datos1->apellido();

			echo "<br>";
			echo "<br>";
			echo $datos2->nombre();
			echo "<br>";
			echo $datos2->apellido();	
			echo "<br>";
			echo $datos2->edad();
			echo "<br>";
			echo $datos1->direccionPersonal();
	?>
</body>
</html>