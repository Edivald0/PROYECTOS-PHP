<?php
	/**
	* 
	*/
	class Circulo extends Figura
	{
		
		public function perimetro()
		{
			return "El perimetro del ". get_called_class(). "es ( diametro = 20 ) = ". $medida = $this->medida * 3.1416;	
		}
		public function area()
		{
			$medida = ($this->medida / 2) * 3.1416 / 2;
			return "El area del ". get_called_class(). "es ( radio = 10 ) = ". $medida;
		}
		
	}