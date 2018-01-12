<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 5</title>
	<style type="text/css">
		body{
			margin-left: 3%;
		}
	</style>
</head>
<body>
	<header>
		<center>
			<h1>Aprende PHP desde cero HD (5/10): Herencia</h1>
		</center>
	</header>

	<section>
		<h2>Herencia</h2>
		<p>
			<ul>
				<li>Posibilidad de que una clase pueda utilizar todos los metodos y variables que tiene una clase padre</li>
			</ul>
		<h2>extends</h2>
			<ul>
				<li>Palabra reservada para poder hacer la herencia</li>
			</ul>
		</p>
	</section>
	<section>
		<h2>Ejemplo</h2>
		<p>
			<ul>
				<li>Archivo:<b> index.php</b></li>
			</ul>
			<pre>
				<code>
			//Se llaman los archivos php
				require 'figura.php';
				require 'cuadrado.php';
				require 'triangulo.php';


			//Asignacion de variables (Se pasan los parametros)
				$cuadrado = new Cuadrado( 4, 3 );
				$triangulo = new Triangulo( 3, 6 );

			//Calculo del perimetro
				echo "El perimetro del cuadrado de lado (3) es: ";
				echo $cuadrado->perimetro();
				echo "El perimetro del triangulo de lado (6)es: ";
				echo $triangulo->perimetro();
				</code>
			</pre>
			<ul>
				<li>Archivo: <b>cuadrado.php</b></li>
			</ul>
			<pre>
				<code>
				class Cuadrado extends Figura
				{
		
		
				}
				</code>
			</pre>
			<ul>
				<li>Archivo: <b>triangulo.php</b></li>
			</ul>
			<pre>
				<code>
				class Triangulo extends Figura
				{
					
					
				}
				</code>
			</pre>
		</p>

		<h4>Resultado del ejemplo</h4>
		<?php
			//Se llaman los archivos php
			require 'figura.php';
			require 'cuadrado.php';
			require 'triangulo.php';


			//Asignacion de variables (Se pasan los parametros)
			$cuadrado = new Cuadrado( 4, 3 );
			$triangulo = new Triangulo( 3, 6 );

			//Calculo del perimetro
			echo "El perimetro del cuadrado de lado (3) es: <b>";
			echo $cuadrado->perimetro();
			echo "</b><br><br>El perimetro del triangulo de lado (6)es: <b>";
			echo $triangulo->perimetro();
		?>
			</b>
	</section>
</body>
</html>