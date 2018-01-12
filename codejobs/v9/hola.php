<?php
	/**
	* 
	*/
	require 'direccion.php';
	class Datos
	{
		use DireccionEdivaldo;
	
		protected $nombre;
		protected $apellidoP;

		public function __construct( $nombre, $apellidoP )
		{
			$this->nombre = $nombre;
			$this->apellidoP = $apellidoP;
		}

		public function nombre()
		{
			return $this->nombre;
		}
		public function apellidop()
		{
			return $this->apellidoP;
		}
		public function apellidom()
		{
			//return "Moreno";
		}
	}