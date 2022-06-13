<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://viacep.com.br/ws/16050630/json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $retorno = curl_exec($ch);

    curl_close ($ch);

    echo "<pre>$retorno</pre>";

    $dados = json_decode($retorno, true);

    $dados['nome'] = 'Villy';

    echo "<pre>$retorno</pre>";

?> 