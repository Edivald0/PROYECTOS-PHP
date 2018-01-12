<?php
/**
* 
*/
class Division extends Calculadora
{
	public function Operacion()
	{
		if ($this->numero_2 == 0) {
			return "No se puede dividir";
		}else{
			return ($this->numero_1 / $this->numero_2);
		}
	}
}