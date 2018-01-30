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

  echo "--------Gerente--------" . PHP_EOL;
  $ger->mostrarDados();
  $ger->calcularBonificacao();


  echo "--------Telefonista--------" . PHP_EOL;
  $tele->mostrarDados();
  $tele->calcularBonificacao();

  echo "--------Secretario--------" . PHP_EOL;
  $sec->mostrarDados();
  $sec->calcularBonificacao();


 ?>
