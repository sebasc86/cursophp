<?php
include 'Cuenta.php';


class Classic extends Cuenta
{

  private $balance;

  function __construct()
  {

  }

  public function debitar($cbu, $montoadebitar, $lugar, $fechaMovimiento)
  {
    parent::__construct($cbu);
    parent::debitar($montoadebitar,$lugar,$fechaMovimiento);
    if($this->lugar == 'banelco'){
      $this->montoadebitar = $montoadebitar * 1.05;
    } elseif ($this->lugar == 'link') {
      $this->montoadebitar = $montoadebitar * 1.1;
    }
    return $this->montoadebitar;
  }


  public function getBalance(){
    return $this->balance;
  }

  public function setBalance($balance){
    return $this->balance = $balance;
  }

  
}
