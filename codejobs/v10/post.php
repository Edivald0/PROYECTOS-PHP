<?php

/**
* 
*/
class Post
{
	protected $category;

	//En el constructor se este inyectando la clase category para empezar a usar sus metodos.
	public function __construct ( Category $category )
	{
		$this->category = $category;
	}
	public function getAll()
	{
		return "Todos los POST";
	}
	public function getCategoriesFromPost()
	{
		return $this->category->getAll2();
	}

}