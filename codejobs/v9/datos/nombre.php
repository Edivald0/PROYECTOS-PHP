<?php
	//require 'direccion.php';
	include 'direccion.php';
	class Datos
	{
		use Direccion;
		//protected		Para que se pueda usar en clases y subclases 
		protected $nombre;
		protected $apellido;

		public function __construct( $nombre, $apellido )
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
		}

		public function nombre()
		{
			return $this->nombre;
		}

		public function apellido()
		{
			return $this->apellido;
		}
		
	}