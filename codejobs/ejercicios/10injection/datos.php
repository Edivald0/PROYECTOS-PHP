<?php
/**
* 
*/
class DatosPersonales
{
	public $nombre;
	public $apellido;
	protected $grupo;

	public function __construct( $nombre, $apellido,  DatosGenerales $datosGenerales )
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;

		$this->grupo = $datosGenerales;
	}
	public function nombre()
	{
		return "Nombre:". $this->nombre;
	}
	public function apellido()
	{
		return "Apellido: ". $this->apellido;
	}

	public function getDatosGenerales()
	{
		return $this->grupo->grupoSanguineo();
	}
}