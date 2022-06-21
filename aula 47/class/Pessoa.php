<?php

trait Comer {
    function comer() {
        echo "Hmm que fome";
    }
}

class Pessoa {
    use Comer;

    function teste() {
        echo "Esta é a classe Pessoa! <br>";
    }
}

class Animal{
    use Comer;
}