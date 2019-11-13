<?php

abstract class Cuenta {

  private $balance;
  private $cbu;
  private $fechaUltimoMovimiento;


  public function setBalance($balance){
    $this->balance = $balance;
  }

  public function getBalance(){
    return $this->balance;

    public function setCbu($cbu){
      $this->cbu = $cbu;
    }

    public function getCbu(){
      return $this->cbu;
    }

  public function debitar{

  }
}
