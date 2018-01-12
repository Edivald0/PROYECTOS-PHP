<?php
/**
* 
*/

class Calculadora
{
	public $numero1;
    public $numero2;

   
	public function Suma( $numero1, $numero2 )
	{
		return "<center><h2>= ". $this->numero1 = $numero1 + $this->numero2 = $numero2. '</h2><center>';
	}
	public function Resta ( $numero1, $numero2 )
	{
		return "<center><br><h2>= ". $this->numero1 = $numero1 - $this->numero2 = $numero2. '</h2><center>';
	}
	public function Multiplicacion ( $numero1, $numero2 )
	{
		return "<center><br><h2>= ". $this->numero1 = $numero1 * $this->numero2 = $numero2. '</h2><center>';
	}
	public function Division ( $numero1, $numero2 )
	{
		return "<center><br><h2>= ". $this->numero1 = $numero1 / $this->numero2 = $numero2. '</h2><center>';
	}
}