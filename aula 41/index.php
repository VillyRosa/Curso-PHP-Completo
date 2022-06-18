<?php
// PHP ORIENTADO A OBJETOS

class Carro {

    // PROPRIEDADES
    public $modelo;
    public $cor;

    // MÉTODOS
    function set_modelo($modelo) {
        $this->modelo = $modelo;
    }

    function get_modelo() {
        return $this->modelo;
    }
}

$carro1 = new Carro();
var_dump($carro1);

echo "<br><br>";

$carro1->set_modelo('Uno');

$carro2 = new Carro();
$carro2->set_modelo('Gol');
var_dump($carro2);

echo "<br><br>";
echo "O carro1 é um ".$carro1->get_modelo()." e o carro2 é um ".$carro2->get_modelo();