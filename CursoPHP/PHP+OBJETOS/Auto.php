<?php
class Auto {

  public $color;
  public $marca;
  public $modelo;

  public function __construct($marca, $modelo, $color="blanco")
  {
    $this -> marca = $marca;
    $this -> modelo = $modelo;
    $this -> color = $color;
  }

}
