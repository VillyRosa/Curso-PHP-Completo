<?php

    // Array's (Matrizes)

    //$carros = array("Fusca", "Uno", "Gol");
    //$carros = ["Fusca", "Uno", "Gol", "Ferrari", "Prisma"];       // Estas 2 formas criam um array

    // Comando usado para contar quantos itens tem dentro do array;
    //$quantidade = count($carros);
    
    // echo $quantidade;

    // listando os itens com for
    
    // for ($i = 0; $i < $quantidade; $i++) {
    //     echo $carros[$i] . "<br>";
    // }

    // listando os itens com foreach

    //foreach ($carros as $carro) {
    //    echo $carro . "<br>";
    //}

    //$idade = ["Villy"=>"19", "Danabel"=>"18", "João"=>"30"];
    //echo $idade["Villy"];

    // ordenando um array

    $nomes = ["Villy", "Cilly", "Filly", "Billy", "Dilly"];
    sort($nomes);
    foreach($nomes as $valor) {
        echo "$valor <br>";
    }
    echo "<style>body{ background-color: gray; color: white; font-size: 15pt;}</style>";

?>