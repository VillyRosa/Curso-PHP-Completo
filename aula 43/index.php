<?php
/* Herança e Visibilidade de Métodos

    public function NomeDaFuncao() {   // A públic pode ser chamada por qualquer um, ela é a padrão.

    }

    protected function NomeDaFuncao() {   // A protected não pode ser chamada pelo usuário, só pode ser chamada
                                            pela classe que a criou ou por herança da classe.
    }

    private function NomeDaFuncao() {   // A private é como a protected, porém nao pode ser chamada por hierarquia.

    }
*/

Class Pai {
    function __construct(public string $nome="", public int $idade=0) {}

    // MÉTODO PÚBLICO
    public function qualNome() {
        echo "O nome dessa pessoa é: ".$this->nome;
    }

    // MÉTODO PROTEGIDO
    protected function qualIdade() {
        echo "A idade dessa pessoa é: ".$this->idade;
    }

    // MÉTODO PRIVADO
    private function todasInformacoes() {
        echo "O nome é ".$this->nome." e a idade é ".$this->idade; 
    }
}

class Filho extends Pai{
    
    function __construct(public string $olhos="") {
        parent::__construct();
    }

    //MÉTODO PÚBLICO    
    function mostraDados() {
        $this->qualIdade();
    }
}

class Neto extends Filho {
    
}

// PAI
$pai = new Pai();
var_dump($pai);
echo "<br><br>";

// FILHO
$filho = new Filho("Verdes","João",20);
$filho->qualNome();
echo "<br><br>";
$filho->mostraDados();
echo "<br><br>";
var_dump($filho);