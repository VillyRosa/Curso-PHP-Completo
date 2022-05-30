<?php

    // If, else, else if

    $hora = 20;

    if ($hora >= 0 && $hora < 12) {
        echo "Bom dia!";
    }
    else if ($hora < 18) {
        echo "Boa tarde!";
    }
    else{
        echo "Boa noite!";
    }

    echo "<br><br>";

    // Switch

    $cor = "amarelo";

    switch($cor) {
        case "vermelho":
            echo "A cor é vermelho";
        break;
        case "azul":
            echo "A cor é azul";
        break;
        case "verde":
            echo "A cor é verde";
        break;
        default:
            echo "A cor não é conhecida";
        break;
    }

?>