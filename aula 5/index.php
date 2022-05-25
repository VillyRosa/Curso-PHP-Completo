<?php

    $x = 10;
    $y = 5;

    function teste() {
        global $x, $y, $z;
        echo "O valor de x dentro da função é: $x <br>";
        $z = $x + $y;
    }

    teste();
    echo "O valor de x fora da função é: $z";

?>