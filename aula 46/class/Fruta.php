<?php

interface MetodosFrutas {
    function criar($nome, $cor);
    function completo();
}

class Fruta implements MetodosFrutas{
    function teste() {
        echo "Esta é a classe Fruta! <br>";
    }
    function criar($nome, $cor) {
        $this->nome = $nome;
        $this->cor = $cor;
    }
    function completo() {
        echo "A fruta é ".$this->nome." e a cor é ".$this->cor."<br>";
    }
}