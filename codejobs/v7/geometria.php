<?php

	//require_once ('matematicas.php');
	include ('matematicas.php');
	
	interface Geometria extends Matematicas
	{
		public function __construct($lado);
		public function perimetro();
		public function area();
	}