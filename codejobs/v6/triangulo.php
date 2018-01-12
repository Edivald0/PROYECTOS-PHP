<?php
	/**
	* 
	*/
	class Triangulo extends Figura
	{
		
		public function perimetro()
		{
			return 'Perimetro del '. get_called_class(). 'es ( L + L + L ) = <b>' . 3 * $this->lado. '</b>';
		}

		public function area()
		{
			return 'El Area del '. get_called_class(). 'es ( b * A / 2 ) = <b>' . ( sqrt(3) / 4 ) * pow( $this->lado, 2 ). '</b>';
		}
		
	}