<?php

    // $texto = '{
    //             "cep": "16050-630",
    //             "logradouro": "Rua Carlos de Campos",
    //             "complemento": "",
    //             "bairro": "Dona Amélia",
    //             "localidade": "Araçatuba",
    //             "uf": "SP",
    //             "ibge": "3502804",
    //             "gia": "1776",
    //             "ddd": "18",
    //             "siafi": "6155"
    //         }';



    // $dados = json_decode($texto, true); // Transformando o texto em objeto (se colocar true, transforma em array)

    // //var_dump($dados);

    // $dados['número'] = "552"; // Adicionando valor no array

    // $json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); // Transformando o array 
    // // ou objeto em texto,
    // // o JSON_PRETTY_PRINT serve para deixar bonito o array, o JSON_UNESCAPED_UNICODE serve para colocar 
    // // acentuação no texto
    
    // echo "<pre>$json<pre>"; // a tag pre serve para organizar o texto

    $texto = $_POST['texto'];   
    $dados = json_decode($texto, true);
    
    $dados['complemento'] = "Casa";
    
    $json = json_encode($dados);

    echo $json;

?>