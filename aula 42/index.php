<?php
// PHP ORIENTADO A OBJETOS

class Carro {

    // PROPRIEDADES
    // public $modelo;
    // public $cor;

    // MÉTODOS
    // function set_modelo($modelo) {
    //     $this->modelo = $modelo;
    // }

    function __construct(public string $modelo, public string $cor) {
        // $this->modelo = $modelo;
        // $this->cor = $cor;
        echo "Objeto criado com sucesso!<br><br>";
    }

    function get_modelo() {
        return $this->modelo;
    }

    function __destruct() {
        // echo "Chegamos ao final da nossa classe!";
    }
}

$carro1 = new Carro("Uno", "Preto");
var_dump($carro1);
echo '<br><br>';
$carro2 = new Carro("Gol", "Azul");

echo "O carro1 é um ".$carro1->get_modelo()." e o carro2 é um ".$carro2->get_modelo();