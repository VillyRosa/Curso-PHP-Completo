<?php

    // MANIPULAÇÃO DE PASTAS (DIRETÓRIOS)

    $pasta = "nome-da-pasta";

    // COMANDO PARA CRIAR PASTAS

    if (!is_dir($pasta)) {
        mkdir($pasta, 0755);
    } else {
        rmdir($pasta);
    }

    // Renomar

    rename($pasta, 'novo-nome');

    // excluir pasta sem nada dentro dela

    rmdir($pasta);

    // PASTA DENTRO DE PASTA

    $pastaDupla = 'pasta-pai/pasta-filho';

    mkdir($pastaDupla, 0755, true);

?>