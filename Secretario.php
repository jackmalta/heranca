<?php
  require_once 'Funcionario.php';
  class Secretario extends Funcionario
  {
    public $ramal;

    function mostrarDados()
    {
      parent::mostrarDados();
      echo "Rama: $this->ramal" . PHP_EOL;
    }
  }

 ?>
