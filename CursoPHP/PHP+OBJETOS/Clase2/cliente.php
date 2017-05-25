<?php

/*1. Crear una clase Persona, una clase PYME y una clase Multinacional. Las 3 clases
deben heredar de la clase Cliente.
2. Mover los atributos y métodos correspondientes (que sólo correspondan a personas
físicas), de la clase Cliente a la clase Persona.
3. Agregar a las clases PYME y Multinacional los atributos y métodos que correspondan.
(ej: CUIT, Razón social, etc). Agregar constructor y métodos getters y setters.
*/


//Defino variables privadas para la clase Cliente

abstract Class Cliente {
protected $nombre;
protected $email;
protected $pass;
protected $documento;

//Creo una función constructora con sus parámetros necesarios



  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }

  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }

  }
