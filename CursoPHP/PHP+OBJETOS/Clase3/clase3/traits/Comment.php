<?php

class Comment {
	use Sharable, Editable;

	private $titulo;

	public function __construct($titulo)
	{
		$this->titulo = $titulo;
	}

}