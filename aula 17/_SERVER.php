<?php

    // SUPERGLOBAIS 😮

    // _SERVER

    // echo $_SERVER['PHP_SELF']; // Retorna o diretório para este arquivo;
    // echo "<br><br>";
    // echo $_SERVER['SERVER_NAME']; // Retorna o nome do servidor;
    // echo "<br><br>";
    // echo $_SERVER['HTTP_HOST']; // Retorna o cabeçalho do servidor;
    // echo "<br><br>";
    // echo $_SERVER['REMOTE_ADDR']; // Retorna o endereço de ip requisitado;
    // echo "<br><br>";
    // echo $_SERVER['HTTP_USER_AGENT']; // Retorna informações sobre quem está acessando a página;

    foreach ($_SERVER as $chave => $valor) {
        echo "<strong>$chave</strong> : $valor <br>";
    }

?>