<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>V7 | INTERFACES</title>
</head>
<body style="padding-left: 3%;">
	<center>
		<header>
			<h1>Interfaces</h1>
		</header>
	</center>
	<section>
		<p>
			Son algo así como declaraciones de funcionalidades que tienen que cubrir las clases que implementan las interfaces.<br>
			<h3>Es como inicializar la estructura o arquitectura de nuestro proyecto</h3>
		</p>
		<p>
			<b>Todos los metodos son <code>public</code> dentro de la interfaz.</b>
		</p>
		<p>
			En una interfaz se define habitualmente un juego de funciones que deben codificar las clases que implementan dicha interfaz. De modo que cuando una clase implementa una intefaz, podremos estar seguros que en su codigo estan definidas las funciones que incluira la interfaz.
		</p>
		<p>
			En la vida diaria es una manera común de usar cierto tipo de objetos, ej:<br>Esperamos que tosdos los autos sin importar su marca, modelo, año o tipo, tengan ciertos elementos en común como son:
			<ul>
				<li>Un volante</li>
				<li>Pedales para el acelerador y el freno</li>
				<li>etc.</li>
			</ul>
		</p>
		<p>
			En informatica este tipo de conceptos se aplica a ciertos dispositivos que aunque pueden ser diferentes entre si comparten interfaces comunes como son:
			<ul>
				<li>Puetos de acceso (USB, HDMI, etc)</li>
			</ul>
		</p>
		<p>
			En <b>POO</b> nos permite crear onjetos aun mas flexibles, dado que si un controlador necesita un repositorio podemos utilizar una interfaz en vez de una implementacion en concreto.
		</p>
	</section>
	<section>
		<center><h2>Ejemplo:</h2></center>
		<h4>index.php</h4>
		<pre>
			<code>
	//Se llaman los archivos php
	require 'figura.php';
	require 'cuadrado.php';
	require 'triangulo.php';

	//Asignacion de variables (Se pasan los parametros)
	$cuadrado = new Cuadrado( 4 );
	$triangulo = new Triangulo( 3 );
			
	echo $cuadrado->perimetro();
	echo $triangulo->perimetro();
	echo $cuadrado->area();
	
	echo $triangulo->area();	
			</code>
		</pre>
		<h4>figura.php</h4>
		<pre>
			<code>
	//require_once ('geometria.php');
	include ('geometria.php');
	class Figura implements Geometria
	{
		//protected		Para que se pueda usar en clases y subclases 
		protected $lado;

		public function __construct( $lado )
		{
			$this->lado = $lado;
		}

		public function perimetro()
		{
			return 'Perimetro de Figura = '. 4 * $this->lado;
		}

		public function area()
		{
			return 'Area de Figura = '. pow( $this->lado, 2 );
		}
		public function volumen()
		{
			
		}
	}
			</code>
		</pre>
		<h4>geometria.php</h4>
		<pre>
			<code>
	//require_once ('matematicas.php');
	include ('matematicas.php');
	
	interface Geometria extends Matematicas
	{
		public function __construct($lado);
		public function perimetro();
		public function area();
	}
			</code>
		</pre>
		<h4>matematicas.php</h4>
		<pre>
			<code>
	interface Matematicas
	{
		public function volumen();
	}
			</code>
		</pre>
	</section>
	<hr>
	<section>
		<?php
			//Se llaman los archivos php
			require 'figura.php';
			require 'cuadrado.php';
			require 'triangulo.php';


			//Asignacion de variables (Se pasan los parametros)
			$cuadrado = new Cuadrado( 4 );
			$triangulo = new Triangulo( 3 );

			
			echo $cuadrado->perimetro();
			echo "<br>";
			echo $triangulo->perimetro();

			echo "<br>";
			echo "<br>";
			echo $cuadrado->area();
			echo "<br>";
			echo $triangulo->area();			
		?>
	</section>
</body>
</html>