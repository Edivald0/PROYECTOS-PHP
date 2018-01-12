<?php
	/**
	* 
	*/
	class Cuadrado extends Figura
	{
		
		public function perimetro()
		{
			return 'Perimetro del '. get_called_class(). 'es ( 4 + 4 + 4 + 4 ) = <b>' . 4 * $this->lado. '</b>';
		}

		public function area()
		{
			return 'Area del '. get_called_class(). 'es ( 4 * 4 ) = <b>' . pow($this->lado, 2). '</b>';
		}
		
	}