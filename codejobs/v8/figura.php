<?php
	include ('geometria.php');
	class Figura implements Geometria
	{
		public $txt = "Accso a una variable publica desde afuera (<b>instancia</b>)";
		public $lado;

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