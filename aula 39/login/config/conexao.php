<?php

// DOIS MODOS POSSÍVEIS -> local, producao
$modo = "local";

if ($modo == "local") {

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "login";

}

if ($modo == "producao") {

    $servidor = "";
    $usuario = "";
    $senha = "";
    $banco = "";

}

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Banco conectado com sucesso!";
} catch(PDOException $erro) {
    echo "Falha ao se conectar ao banco!";
}

function limparPost($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);

    return $dados;
}

// VERIFICAR SE A POSTAGEM EXISTE DE ACORDO COM OS CAMPOS
if (isset($_POST['nome_completo']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repete_senha'])) {
    // VERIFICAR SE TODOS OS CAMPOS FORAM PREENCHIDOS
    if (empty($_POST['nome_completo']) or empty($_POST['email']) or empty($_POST['senha']) or empty($_POST['repete_senha']) or empty($_POST['termos'])) {
        $erro_geral = "Todos os campos são obrigatórios!";
    } else {
        // RECEBER OS VALORES VINDO DO POST E LIMPALOS
        $nome = limparPost($_POST['nome_completo']);
        $email = limparPost($_POST['email']);
        $senha = limparPost($_POST['senha']);
        $repete_senha = limparPost($_POST['repete_senha']);
        $checkbox = limparPost($_POST['termos']);

        // VERIFICAR SE NOME É APENAS LETRAS E ESPAÇOS
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            $erro_nome = "Somente permitidos letras e espaços em branco!";
        }

        // VERIFICAR SE EMAIL É VÁLIDO
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro_email = "Formato de email inválido";
        }

        // VERIFICAR SE A SENHA TEM MAIS DE SEIS DÍGITOS
        if (strlen($senha) < 6) {
            $erro_senha = "Senha deve ter 6 caracteres ou mais!";
        }

        // VERIFICAR SE A REPETIÇÃO DE SENHA É IGUAL A SENHA
        if ($senha != $repete_senha) {
            $erro_repete_senha = "Senha e repetição de senha diferentes!";
        }

        // VERIFICAR SE O CHECKBOX FOI MARCADO
        if ($checkbox != "ok") {
            $erro_checkbox = "Desativado";
        }

    }
}

?>