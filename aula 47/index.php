<?php
require('loadClass.php');

$carro = new Audi();
$carro->teste("Villy");

$fruta = new Fruta();
$fruta->criar("Maçã", "Vermelha");
$fruta->completo();

$pessoa = new Pessoa();
$pessoa->teste();

$teste = new Teste();
$teste->novo();
echo $teste->id;

$teste2 = new Teste();
$teste2->novo();
echo $teste2->id;

$filho = new TesteFilho();
$filho->pega();