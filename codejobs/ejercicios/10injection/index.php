<!DOCTYPE html>
<html>
<head>
	<title>Dependency Injection | Ejercicio</title>
</head>
<body>
	<center>
		<header>
			<h1>Dependency Injection</h1>
		</header>
	</center>
	<section>
		<?php
			include 'datos.php';
			include 'datos-generales.php';

			$datosPersonales = new DatosPersonales("Edivaldo", "Martinez", new DatosGenerales);
			echo $datosPersonales->nombre();
			echo "<br><br>";
			echo $datosPersonales->apellido();
			echo "<br><br>";
			echo $datosPersonales->getDatosGenerales();
		?>
	</section>
</body>
</html>