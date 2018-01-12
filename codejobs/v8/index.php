<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>V8 | Alcance de las Vairables</title>
</head>
<body style="padding: 0% 3%;">
	<center>
		<header>
			<h1>Alcance de las Variables</h1>
			<h2>visivilidad/scopes variables</h2>
		</header>
	</center>
	
	<section>
		<p>
			<h3>public</h3>
			Accedes desde cualquier parte incluyendo otras clases e instancias
			<h3>protected</h3>
			Acceso solo en la misma clase y en las que se heredan
			<h3>private</h3>
			Acceso solo en la misma clase
		</p>
	</section>

	<hr>
	<section>
		<?php

			require 'figura.php';
			require 'cuadrado.php';
			require 'triangulo.php';

			$cuadrado = new Cuadrado( 4 );
			$triangulo = new Triangulo( 3 );

			echo $cuadrado->perimetro();
			echo "<br>";
			echo $triangulo->perimetro();
			echo "<br><br>";
			echo $cuadrado->area();
			echo "<br>";
			echo $triangulo->area();			
			echo "<br><br>";
			echo $cuadrado->txt;
		?>
	</section>
</body>
</html>