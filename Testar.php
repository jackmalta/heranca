<?php
  require_once 'Gerente.php';
  require_once 'Telefonista.php';
  require_once 'Secretario.php';

  $tele = new Telefonista();
  $tele->nome = "Seu Cuca";
  $tele->salario = 1000;
  $tele->estacaoDeTrabalho = 23;

  $sec = new Secretario();
  $sec->nome = "Anastacio";
  $sec->salario = 1000;
  $sec->ramal = 15;

  $ger = new Gerente();
  $ger->nome = "Laura";
  $ger->salario = 2500;
  $ger->usuario = "Laura123";
  $ger->senha = "senha";

  echo "--------Gerente--------";
  echo "Nome: $ger->nome".PHP_EOL;
  echo "Salario: $ger->salario".PHP_EOL;
  echo "Usuário: $ger->usuario".PHP_EOL;
  echo "Senha: $ger->senha".PHP_EOL;
  $ger->calcularBonificacao();


  echo "--------Telefonista--------";
  echo "Nome: $tele->nome".PHP_EOL;
  echo "Salario: $tele->salario".PHP_EOL;
  echo "Usuário: $tele->estacaoDeTrabalho".PHP_EOL;
  $tele->calcularBonificacao();

  echo "--------Secretario--------";
  echo "Nome: $sec->nome".PHP_EOL;
  echo "Salario: $sec->salario".PHP_EOL;
  echo "Ramal: $sec->ramal".PHP_EOL;
  $sec->calcularBonificacao();


 ?>
