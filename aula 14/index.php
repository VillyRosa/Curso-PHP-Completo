<?php

    // While

    $tabuada = 5;
    $contador = 1;
    while($contador <= 10){
        echo $tabuada . " x " . $contador . " = " . ($tabuada * $contador);
        echo "<br>";
        $contador++;
    }

    echo "<br><br>";

    // Do While

    $x = 1;

    do {
        echo "O número é: $x <br>";
        $x++;
    } while ($x <= 5);

    echo "<br><br>";

    // for

    for ($x = 1; $x <= 10; $x++) {
        echo $x . "º For <br>";
    }

    echo "<br><br>";

    // Foreach

    $cores = ["vermelho", "azul", "amarelo"];

    foreach($cores as $valor) {
        echo "A cor é $valor <br>";
    }

?>