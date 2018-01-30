<?php
  require_once 'Funcionario.php';
  class Telefonista extends Funcionario
  {
    public $estacaoDeTrabalho;

    function mostrarDados()
    {
      parent::mostrarDados();
      echo "Estação de Trabalho: $this->estacaoDeTrabalho" . PHP_EOL;
    }
  }

 ?>
