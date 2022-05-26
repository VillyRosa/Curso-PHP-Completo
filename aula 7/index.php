<?php   

    /*
    Tipos de Dados

    String, [Palavras];
    Integer, [Inteiro, qualquer número não decimal];
    Float, [Decimal, qualquer número decimal];
    Boolean, [booleano, true ou false];
    Array, [Matriz];
    Object, [Objeto];
    Null, [nulo];
    */

    // Object (objeto)
    class carro {
        public $cor;
        public $modelo;

        public function __construct($cor, $modelo) {
            $this->cor = $cor;
            $this->modelo = $modelo;
        }

        public function mensagem() {
            return "O carro é $this->cor e o modelo é $this->modelo";
        }
    }

    $carro1 = new carro("Branco", "Fusca");
    echo $carro1->mensagem();

?>