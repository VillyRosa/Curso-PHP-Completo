<?php

// CONFIGURAÇÕES GERAIS
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "primeiro_banco";

// CONEXÃO
$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

// FUNÇÃO PARA SANATIZAR (LIMPAR ENTRADAS)
function limparPost($dado) {
    $dado = trim($dado);
    $dado = stripcslashes($dado);
    $dado = htmlspecialchars($dado);

    return $dado;
}

?>