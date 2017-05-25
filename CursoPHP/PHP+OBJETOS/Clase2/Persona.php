<?php
include_once 'cliente.php';

class Persona extends Cliente {


  Private $apellido;
  Private $nacimiento;


public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass){
  $this->nombre = $nombre;
  $this->apellido = $apellido;
  $this->documento = $documento;
  $this->nacimiento = $nacimiento;
  $this->email = $email;
  $this->pass = $pass;
}


public function setApellido($apellido){
  $this->apellido = $apellido;
}
public function getApellido(){
  return $this->apellido;
}

public function setNacimiento($nacimiento){
  $this->nacimiento = $nacimiento;
}
public function getNacimiento(){
  return $this->nacimiento;
}

}
