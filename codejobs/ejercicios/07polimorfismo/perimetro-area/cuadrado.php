<?php

	/**
	* 
	*/
	class Cuadrado extends Figura
	{
		
		public function perimetro()
		{	
			return "El perimetro de ". get_called_class(). " ( lado = 10 ) es: ". $medida = $this->medida * 4;
		}
		public function area()
		{		
			return "El Area de ". get_called_class(). " ( lado = 10 ) es: ". $medida = pow($this->medida, 2);
		}
		
	}