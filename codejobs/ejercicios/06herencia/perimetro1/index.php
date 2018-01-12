<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>herencia | ejercicio</title>
</head>
<body style="padding-left: 5%;">
	<center>
		<header>
			<h1>Herencia | Area y perimetro de un Cuadrado y un Triamgulo</h1>
		</header>
	</center>
	<section>
		<?php
			require 'figura.php';
			require 'cuadrado.php';
			require 'triangulo.php';

			$cuadrado = new Cuadrado( 4, 10  );
			$triangulo = new Triangulo ( 3, 30 );

			echo "<ul><li>Cuadrado</li></ul>Perimetro (4*10) = ";
			echo $cuadrado->perimetro();

			echo "<ul><li>Triangulo</li></ul>Perimetro(3*30) = ";
			echo $triangulo->perimetro();
			
			echo "<ul><li>Cuadrado</li></ul>Area(2*4) = ";
			echo $cuadrado->AreaCuadrado();

			echo "<ul><li>Triangulo</li></ul>Area(30*20/2) = ";
			echo $triangulo->areaTriangulo();
			
		?>	
	</section>

</body>
</html>