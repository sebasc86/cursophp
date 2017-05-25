<?php
include_once 'cliente.php';

class Pyme extends Cliente {

  private $direccion;


  public function __construct($documento, $nombre, $direccion){
    $this->nombre = $nombre;
    $this->documento = $documento;
  }

  public function getDireccion()
  {
    return $this->direccion;
  }

  public function setDireccion()
  {
    $this->direccion = $direccion;
  }



}
