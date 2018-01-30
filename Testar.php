<?php
  require_once 'Gerente.php';
  require_once 'Telefonista.php';
  require_once 'Secretario.php';

  $tele = new Telefonista("Seu Cuca", 1200, 23);

  $sec = new Secretario("Anastacio", 999, 15);

  $ger = new Gerente("Elena", 2500, "Elena123", "Senha12");


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
