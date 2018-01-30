<?php
  class Funcionario
  {
    public $nome;
    public $salario;

    function calcularBonificacao()
    {
      $boni = $this->salario * 0.1;
      echo "Valor da bonificação: $boni" . PHP_EOL;
    }

    function mostrarDados()
    {
      echo "Nome: $this->nome" . PHP_EOL;
      echo "Salário: $this->salario" . PHP_EOL;
    }
  }

 ?>
