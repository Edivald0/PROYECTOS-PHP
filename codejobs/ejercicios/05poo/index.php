<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<center><h1>POO</h1></center>
		<nav class="menu-header">
			<ul>
				<a href="#"><li>Inicio</li></a>
				<a href="#"><li>Nosotros</li></a>
				<a href="#"><li>Contacto</li></a>
			</ul>
		</nav>
	</header>
	<section class="datos">
		<?php
			/**
			* 
			*/
			class Humano
			{
				public $genero = null;
				public $edad = null;
				private $nombre = "Edivaldo";
				private $apellidos = "Martínez";

				public function __construct($genero = "Masculino", $edad = 2000)
				{
					$this->genero = $genero;
					$this->edad = $edad;
					

				}
				
				public function getGenero()
				{
					
					return $this->genero;
				}
				public function getEdad()
				{
					$var = $this->edad;
					$var = $var-1991;
					return $var;
				}
				public function nombre()
				{
					return $this->nombre;
				}
				public function apellidos()
				{
					return $this->apellidos;
				}

				public function __destruct()
				{
					echo '<span class="">Destruido</span>';
				}
			}
		
			$Humano = new Humano();
			echo "Genero: ". $Humano->getGenero(). "<br>";
			echo "Edad: ". $Humano->getEdad(). " años<br>";
			echo "Nombre: ". $Humano->nombre(). "<br>";
			echo "Apelidos: ". $Humano->apellidos();
		?>

	</section>
</body>
</html>