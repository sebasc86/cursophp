<?php
include_once 'cliente.php';


class Multinacional extends Cliente {

    private $sucursales;

    public function __construct($nombre, $documento, $sucursales){
      $this->$nombre = $nombre;
      $this->documento = $documento;
      $this->sucursales = $sucursales;
    }

    public function getSucursales()
    {
      return $this->sucursales;

    }

    public function setSucursales($sucursales){
      $this->sucursales = $sucursales;
    }


}


 ?>
