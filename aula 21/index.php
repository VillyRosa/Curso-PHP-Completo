<?php

    // 07/06/22
    echo date('d/m/y');

    echo '<br><br>';

    // Tue/Jun/2022
    echo date('D/M/Y');

    echo '<br><br>';

    // 13:30:00     
    echo date('H:i:s');

    echo '<br><br>';

    // PADÃO BRASILEIRO DE DATAS
    // Dia/Mês/Ano
    // 07/06/2022

    // PADÃO AMERICANO DE DATAS 
    // Year/Month/Day
    // 2022/06/07

    $hoje = date('Y-m-d');
    $vencimento = '2022-06-25';

    $diferenca = strtotime($vencimento) - strtotime($hoje);
    $dias = floor($diferenca / (60*60*24));

    // CONVERSÃO PARA O PADRÃO BR
    $data_hoje = explode('-', $hoje);
    $hoje_formatado = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

    echo "Hoje: $hoje<br>";
    echo "Vencimento: $vencimento<br><br>";
    echo "A diferença é de $dias dias entre as datas";

    echo '<br><br>';

    // COMPARAÇÃO ENTRE DUAS DATAS, MAIOR, MENOR E IGUAL
    $data1 = '2022-06-15';
    $data2 = '2022-06-15';

    if (strtotime($data1) > strtotime($data2)) {
        echo 'A data 1 é maior que a data 2';
    } else if (strtotime($data1) < strtotime($data2)) {
        echo 'A data 1 é menor que a data 2';
    } else {
        echo 'A data 1 é igual a data 2';
    }

?>