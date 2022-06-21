<?php
require('loadClass.php');

$carro = new Audi();
$carro->teste("Villy");

$fruta = new Fruta();
$fruta->criar("Maçã", "Vermelha");
$fruta->completo();

$pessoa = new Pessoa();
$pessoa->teste();