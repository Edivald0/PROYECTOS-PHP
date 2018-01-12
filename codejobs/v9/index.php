<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>V9 | Traits</title>
	<style>
		body{
			padding: 0% 3%;
		}
	</style>
</head>
<body>
	<center>
		<header>
			<h1>Traits</h1>
		</header>
	</center>
	<section>
		<p>Desde php 5.4 (aproximadamente)</p>
		<p>
			Como un tipo de herencia multiple
		</p>
		<p>
			<code><b>trait</b></code> Palabra reservada para crear el trait. Ejeemplo:
			<pre>
				<code>
		trait DireccionEdivaldo
		{
			public function direccionPersonal()
			{
				return "Calle Veracruz #35";
			}
		}
				</code>
			</pre>
		</p>
	</section>
	<section>
		<center><h3>Ejemplo</h3></center>
		<code><h4>index.php</h4></code>
		<pre>
			<code>
	include 'hola.php';
	include 'hola2.php';
	
	$nombre = new Persona1("Edivaldo", "Martínez");
	echo $nombre->nombre();
	echo " ". $nombre->apellidop();
	echo " ". $nombre->apellidom();
	echo $nombre-><mark>direccionPersonal();</mark>
			</code>
		</pre>
		<code><h4>hola.php</h4></code>
		<pre>
			<code>
	<mark>require 'direccion.php';</mark>

	class Datos
	{
		<mark>use DireccionEdivaldo;</mark>
	
		protected $nombre;
		protected $apellidoP;

		public function __construct( $nombre, $apellidoP )
		{
			$this->nombre = $nombre;
			$this->apellidoP = $apellidoP;
		}

		public function nombre()
		{
			return $this->nombre;
		}
		public function apellidop()
		{
			return $this->apellidoP;
		}
		public function apellidom()
		{
			//return "Moreno";
		}
	}
			</code>
		</pre>
		<code><h4>direccion.php</h4></code>
		<pre>
			<code>
	<mark>trait</mark> DireccionEdivaldo
	{
		public function direccionPersonal()
		{
			return "Calle Veracruz #35";
		}
	}
			</code>
		</pre>
	</section>
	<section>
		<?php
			include 'hola.php';
			include 'hola2.php';
 
			$nombre = new Persona1("Edivaldo", "Martínez");
			echo "<br><br>". $nombre->nombre();
			echo " ". $nombre->apellidop();
			echo " ". $nombre->apellidom();
			echo "<br><br>". $nombre->direccionPersonal();
		?>
	</section>
</body>
</html>