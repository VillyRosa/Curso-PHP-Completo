<?php

abstract class Carro {
    abstract function teste($nome);
}

class Audi extends Carro {
    function teste($nome) {
        echo "Está é uma nova classe $nome <br>";
    }
}