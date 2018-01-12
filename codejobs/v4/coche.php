<?php
	class Coche
	{
		/**
		*	Propiedades o Atributos
		*/
		public $velocidad = 100;
		private $serie_variable = "abc123";
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

		public function serie()
		{
			return $this->serie_variable;
		}

		public function velocidadHora()
		{
			$var = $this->velocidad;
			$var = $var * 2;
			return $var;
		}

		//DESTRUCTOR
		public function __destruct()
		{
			echo "<br><br><center>Objeto destruido</center>";
		}
	}
	/*
		new : palabra reservada para crear nuevas instancias de clases (paas toda la clase metdos y propiedades) y que puedan ser llamadas o accedidas por otro objeto ($Coche)
	*/
	$Coche = new Coche("Negro", "Ford", "Lobo");

	/* 
		-> : el guion medio (-) y el mayor que (>) sirve para accder a un metodoo un atributo de una clase
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

	echo "<br><br>";
	echo "Serie: ". $Coche->serie();
	echo "<br><br>";
	echo "velocidad: ". $Coche->velocidadHora();

