<?php
require('config/conexao.php');

if (isset($_GET['cod_confirm']) && !empty($_GET['cod_confirm'])) {
    // LIMPAR O GET
    $cod = limparPost($_GET['cod_confirm'])

    // CONSULTAR SE ALGUM USUÁRIO TEM ESTE CÓDIGO DE CONFIRMAÇÃO
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE codigo_confirmacao=? LIMIT 1");
    $sql->execute([$cod]);
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    if ($usuario) {
        // ATUALIZAR O STATUS PARA CONFIRMADO
        $status = "confirmado";
        $sql = $pdo->prepare("UPDATE usuarios SET status=? WHERE codigo_confirmacao=?");
        if ($sql->execute([$status,$cod])) {
            // ARMAZENAR ESTE TOKEN NA SESSAO (SESSION)
            $_SESSION['TOKEN'] = $token;
            header('location: index.php?result=ok');
        }
    } else {
        echo "<h1>Código de confirmação inválido!</h1>";
    }
}
?>