<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 6 | POLIMORFISMO</title>
	<style type="text/css">
		body{
			margin-left: 3%;
		}
	</style>
</head>
<body>
	<header>
		<center>
			<h1>Aprende PHP desde cero HD (6/10):Polimorfismo </h1>
		</center>
	</header>
	<section>
		<center><h2>Polimorfismo</h2></center>
		<p>
			Un metodo se puede comportar de diferente manera en las sub-clases cuando se hereda en la clase padre.
			<h4>Implica:</h4>
			<ul>
				<li>Herencia</li>
				<li>Sobre escritura de las funciones</li>
			</ul>
		</p>
		<p>
			<h3>Calculo de Exponente</h3>
			<code>pow(base, expo);</code>
			<br><br>
			Ejemplos:<br>
			<pre>
				<code>
	echo pow(2, 2); //<?php echo pow(2, 2); ?>
				<br>
	echo pow(2, 5);	//<?php echo pow(2, 5); ?>
				</code>
			</pre>
			<h3>Calculo de Raiz Cuadrada</h3>		
			<code>sqrt(arg)<code>
			<br><br>
			Ejemplos: <br>
			<pre>
				<code>
	echo sqrt(6); //<?php echo sqrt(6); ?>		
					<br>
	echo sqrt(2); //<?php echo sqrt(2); ?>
				</code>
			</pre>
			<h3>Nombre de la clase</h3>
			<code>get_called_class(oid);</code>
			<br><br>
			Ejemplos: <br>
			<pre>
				<code>
	class <b>Triangulo</b> extends Figura
	{
		
		public function perimetro()
		{
			return 'Perimetro del '. get_called_class(). 'es ( L + L + L ) = ' . 3 * $this->lado;
		}
	//Perimetro del <b>Triangulo</b> es ( L + L + L ) = 9
		public function area()
		{
			return 'El Area del '. get_called_class(). 'es ( b * A / 2 ) = ' . ( sqrt(3) / 4 ) * pow( $this->lado, 2 );
		}
	//El Area del <b>Triangulo</b> es ( b * A / 2 ) = 3.89711431703	

	}				
				</code>
			</pre>
		</p>
	</section>
	<section>
		<h2>Ejemplo</h2>
		<h4>figura.php</h4>
		<pre>
			<code>
	class Figura
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
		
	}			
			</code>
		</pre>
		<h4>cuadrado.php</h4>
		<pre>
			<code>
	class Cuadrado extends Figura
	{
		
		public function perimetro()
		{
			return 'Perimetro del '. get_called_class(). 'es ( 4 + 4 + 4 + 4 ) = ' . 4 * $this->lado;
		}

		public function area()
		{
			return 'Area del '. get_called_class(). 'es ( 4 * 4 ) = ' . pow($this->lado, 2);
		}
		
	}
			</code>
		</pre>
		<h4>triangulo.php</h4>
		<pre>
			<code>
	class Triangulo extends Figura
	{
		
		public function perimetro()
		{
			return 'Perimetro del '. get_called_class(). 'es ( L + L + L ) = ' . 3 * $this->lado;
		}

		public function area()
		{
			return 'El Area del '. get_called_class(). 'es ( b * A / 2 ) = ' . ( sqrt(3) / 4 ) * pow( $this->lado, 2 );
		}
		
	}
			</code>
		</pre>
	</section>
	
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
</body>
</html>