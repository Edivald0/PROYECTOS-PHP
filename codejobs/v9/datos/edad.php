<?php

/**
	* 
	*/
	class Persona2 extends Datos
	{
		
		public function nombre()
		{
			return $this->nombre;
		}

		public function apellido()
		{
			return $this->apellido;
		}
		public function edad()
		{
			return "25 años";
		}
	}