<?php
  require_once 'Funcionario.php';

  class Gerente extends Funcionario
  {
    public $usuario;
    public $senha;

    function calcularBonificacao()
    {
      $boni = $this->salario * 0.6 + 100;
      echo "Valor da bonificação: $boni" . PHP_EOL;
    }


  }
 ?>
