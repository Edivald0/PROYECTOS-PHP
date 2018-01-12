<?php

	class Figura
	{
		private $lados;
		private $medida;

		public function __construct( $lados, $medida )
		{
			$this->lados = $lados;
			$this->medida = $medida;
		}

		public function perimetro()
		{
			return $this->lados * $this->medida;
		}
		
	}