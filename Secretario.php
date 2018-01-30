<?php
  require_once 'Funcionario.php';
  class Secretario extends Funcionario
  {
    public $ramal;

    function __construct($n, $s, $r)
    {
      $this->nome     = $n;
      $this->salario  = $s;
      $this->ramal  = $r;
    }

    function mostrarDados()
    {
      parent::mostrarDados();
      echo "Rama: $this->ramal" . PHP_EOL;
    }
  }

 ?>
