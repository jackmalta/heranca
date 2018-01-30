<?php
  require_once 'Funcionario.php';
  class Telefonista extends Funcionario
  {
    public $estacaoDeTrabalho;

    function __construct($n, $s, $e)
    {
      $this->nome     = $n;
      $this->salario  = $s;
      $this->estacaoDeTrabalho  = $e;
    }

    function mostrarDados()
    {
      parent::mostrarDados();
      echo "Estação de Trabalho: $this->estacaoDeTrabalho" . PHP_EOL;
    }
  }

 ?>
