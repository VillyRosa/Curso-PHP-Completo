<?php

    // MANIPULAÇÃO DE ARQUIVOS 

    // fopen() -> Abrir / Criar
    // fwrite() -> Escrever no arquivo
    // fclose() -> Fechar o arquivo
    // feof()
    // fgets()
    // file_put_contents()
    // file_get_contents()
    // unlink() -> Deleta um arquivo
    // copy() -> Copiar arquivo

    $pasta = 'arquivos';

    if (!is_dir($pasta)) {
        mkdir($pasta, 0755);
    }

    $nome_arquivo = 'arquivos/' . date('d.m.Y-H.i.s') . '.txt';
    $arquivo = fopen($nome_arquivo, 'a+'); 
    fwrite($arquivo, 'Uma linha injetada pelo php' .PHP_EOL);
    fwrite($arquivo, 'Duas linha injetada pelo php' .PHP_EOL);
    fwrite($arquivo, 'Três linha injetada pelo php' .PHP_EOL);
    fclose($arquivo);

?>