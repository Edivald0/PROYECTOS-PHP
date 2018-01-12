<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 4</title>
</head>
<body style="margin-left: 3%;">
	<section>
		<center>
			<h1>POO?</h1>
		</center>
		<p>
			<ul>
				<li>Es un paradigma de programacion</li>
				<li>Es "simplemente" una forma de ver las cosas</li>
			</ul>
			<h2>Conceptos Basicos</h2>
			<ul>
				<li><b>Objeto:</b></li>
					<ul>
						<li>Cualquier cosa... de lo que puedas emitir un concepto</li>
						<li>EJ: Piedra, Papel o Tijeras</li>
							<ul>
								<li>Piedra --> Pesada</li>
								<li>Papel --> Color</li>
								<li>Tijera --> Cortar</li>
							</ul>
					</ul>
					<li><b>Clase:</b></li>
						<ul>
							<li>Un entidad de codigo formada por variables y funciones</li>
							<li>que describe las caracteristicas y los comportamientos de todos los miembros de un conjunto</li>
							<li>Ejemplo:</li>
								<ul>
									<li>La clase <b>"Coche"</b>: los siguientes metodos y propiedades describen las caracteristicas de todos los coches en general: </li>
										<ul>
											<li>Coche --> encender()</li>
											<li>Coche --> apagar()</li>
											<li>Coche --> acelerar()</li>
											<li>Coche --> velocidad = "100 km/h"</li>
											<li>Coche --> frenar</li>
										</ul>
								</ul>
						</ul>
			</ul>
		</p>
	</section>

	<section>
		<a href="coche.php"><h1>Ejemplo "coche.php"</h1></a>
		<p>
			<code>
				<pre>
					class Coche
					{
						/**
						*	Propiedades o Atributos
						*/
						public $velocidad = 100;
						private $serie = "abc123";
						private $encendido = false;
						static $llantas = 4;
						private $color = null;
						private $marca = null;
						private $modelo = null;

						//CONSTRUCTOR
						public function __construct($color = "Rojo", $marca = "Nissan", $modelo = "Versa")
						{
							$this->color = $color;
							$this->marca = $marca;
							$this->modelo = $modelo;
						}

						public function getColor()
						{
							return $this->color;
						}

						public function getMarca()
						{
							return $this->marca;
						}

						public function getModelo()
						{
							return $this->modelo;
						}

						public function estado()
						{
							//Se accede al atibuto private $encendido
							return $this->encendido;

							

							//$this->$llantas;
							/* 
							Formas es para acceder a un metodo static es ( :: )
							Coche::$llantas;

							Otra forma es para acceder a un metodo static es ( self )
							self::$llantas;
						*/

							//Coche::$llantas;
							//self::$llantas;
						}

						public function encender()
						{
							//Se accede al atributo private $encendido y se le da valor de true
							$this->encendido = true;
						}

						public function apagar()
						{
							//Se accede al atributo private $encendido y se le da valor de false
							$this->encendido = false;
						}

						//DESTRUCTOR
						public function __destruct()
						{
							echo "<br><br><center>Objeto destruido</center>";
						}
					}
					/*
						new : palabra reservada para crear nuevas instancias de clases 
						(paas toda la clase metdos y propiedades) y que puedan ser llamadas
						 o accedidas por otro objeto ($Coche)
					*/
					$Coche = new Coche("Negro", "Ford", "Lobo");

					/* 
						-> : el guion medio (-) y el mayor que (>) sirve para accder a un 
						metodoo un atributo de una clase
					*/
					echo "El coche esta: (false = apagado)<br>";
					echo "El coche esta: (true = encendido)<br><br>";
					
					var_dump($Coche->estado());	
					$Coche->encender();
					var_dump($Coche->estado());

					echo "<br><br>";
					echo "Color: ". $Coche->getColor(). "<br>";
					echo "Marca: ". $Coche->getMarca(). "<br>";
					echo "Modelo: ". $Coche->getModelo(). "<br><br>";

					$Coche->apagar();
					var_dump($Coche->estado());

				</pre>
			</code>
		</p>
	</section>

	<section>
		<center><h1>Constructor | Destructor</h1></center>
		<p>
			<ul>
				<li>
					<b>constructor</b><br>
					<code>
						public function __construct()<br>
						{
							<br><br>
						}
					</code>
				</li>
					<ul>
						<li>Funcion que se va a ejecutar cuando nosotros hagamos la instancia de nuestra clase</li>
					</ul>
				<li>
					<b>destructor</b><br>
					<code>
						public function __destruct()<br>
						{<br>
							echo "Objeto destruido";<br>
						}
					</code>
				</li>
					<ul>
						<li>Se va a ejecutar cuando el objeto se termine de ejecutarse</li>
					</ul>
			</ul>
		</p>
		<p>
		<code>
			<pre>
				class Coche
				{
					/**
					*	Propiedades o Atributos
					*/
					public $velocidad = 100;
					private $serie = "abc123";
					private $encendido = false;
					static $llantas = 4;
					private $color = null;
					private $marca = null;
					private $modelo = null;

					//CONSTRUCTOR
					<b>public function __construct($color = "Rojo", $marca = "Nissan", $modelo = "Versa")
					{
						$this->color = $color;
						$this->marca = $marca;
						$this->modelo = $modelo;
					}
					</b>
					public function getColor()
					{
						return $this->color;
					}

					public function getMarca()
					{
						return $this->marca;
					}

					public function getModelo()
					{
						return $this->modelo;
					}

					public function estado()
					{
						//Se accede al atibuto private $encendido
						return $this->encendido;
					}

					public function encender()
					{
						//Se accede al atributo private $encendido y se le da valor de true
						$this->encendido = true;
					}

					public function apagar()
					{
						//Se accede al atributo private $encendido y se le da valor de false
						$this->encendido = false;
					}

					//DESTRUCTOR
					<b>public function __destruct()
					{
						echo "Objeto destruido";
					}
					</b>
				}
				
				$Coche = new Coche("Negro", "Ford", "Lobo");

			
				echo "El coche esta: (false = apagado)";
				echo "El coche esta: (true = encendido)";
				
				var_dump($Coche->estado());	
				$Coche->encender();
				var_dump($Coche->estado());

				echo "Color: ". $Coche->getColor();
				echo "Marca: ". $Coche->getMarca();
				echo "Modelo: ". $Coche->getModelo();

				$Coche->apagar();
				var_dump($Coche->estado());

			</pre>
		</p>
	</section>
</body>
</html>