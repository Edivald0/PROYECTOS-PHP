<?php
	
	//require_once ('geometria.php');
	include ('geometria.php');
	class Figura implements Geometria
	{
		//protected		Para que se pueda usar en clases y subclases 
		protected $lado;

		public function __construct( $lado )
		{
			$this->lado = $lado;
		}

		public function perimetro()
		{
			return 'Perimetro de Figura = '. 4 * $this->lado;
		}

		public function area()
		{
			return 'Area de Figura = '. pow( $this->lado, 2 );
		}
		public function volumen()
		{

		}
	}