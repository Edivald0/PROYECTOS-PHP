<?php

	/**
	* Clase padre
	*/
	class Figura
	{
		private $medidaP;
		private $ladosP;

		private $ladosA = null;
		private $medidaA = null;
		private $baseA = 2;
		private $alturaA = 20;

		
		public function __construct( $ladosP, $medidaP )
		{

			$this->ladosP = $ladosP;
			$this->medidaP = $medidaP;
			
		}
		
		
		
		public function perimetro()
		{
			return $this->ladosP * $this->medidaP;
		}

		
		public function AreaCuadrado()
		{
			return $this->ladosP*2;
		}
	
		public function areaTriangulo()
		{
			return $this->ladosP * $this->alturaA / 2;
		}

		public function __destruct(){
			echo "Objeto destruido";
		}

	}
