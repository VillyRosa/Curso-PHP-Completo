<?php

    // Funções matemáticas
    
    // retorna o valor de pi
    echo pi();
    echo "<br><br>";

    $numeros = [50, 80, -20, 0.18];
    // retorna o menor valor
    echo min($numeros);
    echo "<br><br>";
    // retorna o maior valor
    echo max($numeros);
    echo "<br><br>";

    $numNegativo = -548;
    // retorna o numero porem positivo
    echo abs($numNegativo);
    echo "<br><br>";

    // retorna a raiz quadrada do numero
    echo sqrt(16);
    echo "<br><br>";

    // arredonda o número
    echo round(10.8);
    echo "<br><br>";
    
    // gera um número aleatório
    echo rand(1, 10);

?>