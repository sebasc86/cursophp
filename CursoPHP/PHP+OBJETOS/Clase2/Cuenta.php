<?php

abstract class Cuenta
{
  protected $cbu;
  protected $fechaMovimiento;
  protected $balance = 0;
  protected $montoadebitar;
  protected $montoacreditado;
  protected $lugar;

  function __construct($cbu)
  {
    $this->cbu = $cbu;
  }

  public function getCbu(){
    return $this->cbu;
  }

  public function getBalance(){
    return $this->balance;
  }

  public function getFechaMovimiento(){
    return $this->fechaMovimiento;
  }

  public function setCbu($cbu){
    return $this->cbu = $cbu;
  }

  public function setBalance($balance){
    return $this->balance = $balance;
  }

  public function setFechaMovimiento($fechaMovimiento){
    return $this->fechaMovimiento = $fechaMovimiento;
  }

  abstract public function debitar($montoadebitar, $lugar, $fechaMovimiento) {
    $this->lugar = $lugar;
    $this->fechaMovimiento = $fechaMovimiento;
    return $this->montoadebitar = $montoadebitar;
  }

  public function acreditar($montoacreditado, $fechaMovimiento){
    setFechaMovimiento($fechaMovimiento);
    return $this->montoacreditado = $montoacreditado;
  }


}
