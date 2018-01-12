<?php

	class Figura
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
		
	}