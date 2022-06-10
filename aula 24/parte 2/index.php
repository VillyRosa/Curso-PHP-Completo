<?php

    $arquivo = "teste.html";
    $titulo = "<h1>Villy</h1>";

    file_put_contents($arquivo, '<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste</title>
    </head>
    <body>'
        .$titulo.
    '</body>
    </html>');

?>