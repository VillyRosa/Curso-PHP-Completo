<?php

class Teste {
    static $indice=0;
    public $id;

    function novo() {
        $this->id = self::$indice;
        self::$indice++;
    }
}

class TesteFilho extends Teste {
    function pega() {
        echo "<br>".parent::$indice;
    }
}