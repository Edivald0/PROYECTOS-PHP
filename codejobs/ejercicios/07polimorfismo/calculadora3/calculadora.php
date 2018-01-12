<?php
	@$suma = $_GET['suma'];
	@$resta = $_GET['resta'];
	@$multiplicacion = $_GET['multiplicacion'];
	@$division = $_GET['division'];

	@$n1 = $_GET['number_1'];
	@$n2 = $_GET['number_2'];
	/**
	* 
	*/
	class Calculadora
	{
		protected $numero_1;
		protected $numero_2;
		
		public function __construct( $numero_1, $numero_2 )
		{
			$this->numero_1 = $numero_1;
			$this->numero_2 = $numero_2;
		}

		public function Operacion()
		{

		}
	}