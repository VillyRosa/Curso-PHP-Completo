<style>
    body{
        background-color: #525252;
        color: white;
        font-family: Arial;
        font-size: 15pt;
    }
</style>

<?php   

    // MANIPULAÇÃO DE STRINGS

    // strlen
    $nome = "Villy";
    echo strlen($nome);

    echo "<br><br>";

    // str_word_count
    $frase = "O mundo é muito belo!";
    echo str_word_count($frase);

    echo "<br><br>";

    // strrev()
    $palavra = "Banana";
    echo strrev($palavra);

    echo "<br><br>";

    // strpos()
    echo strpos("Ola eu sou um programador de php", "programador");

    echo "<br><br>";

    // str_replace()
    $ditado = "Agua mole, pedra dura, tanto bate ate que fura.";
    echo str_replace("tanto bate ate que fura", "e fim de papo", $ditado);

?>