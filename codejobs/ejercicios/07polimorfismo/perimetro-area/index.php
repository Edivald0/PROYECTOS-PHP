<!DOCTYPE html>
<html>
<head>
	<title>Perimetro | Area</title>
</head>
<body>

	<center>
		<header>
			<h1>Perimetro | Area</h1>
		</header>
	</center>
	<?php
		require 'figura.php';
		require 'cuadrado.php';
		require 'circulo.php';

		$cuadrado = new Cuadrado ( 10 );
		$circulo = new Circulo ( 20 );

		echo $cuadrado->perimetro();
		echo "<br><br>";
		echo $cuadrado->area();
		echo "<br><br>";
		echo $circulo->perimetro();
		echo "<br><br>";
		echo $circulo->area();
	?>
</body>
</html>