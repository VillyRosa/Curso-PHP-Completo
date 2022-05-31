<?php

    // SUPERGLOBAIS 😮

    // GLOBALS

    $a = 10;
    $b = 20;

    function soma() {
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
        // ou assim
        // global $a, $b, $c;
        //$c = $a + $b;
    }

    soma();
    echo $c;

?>