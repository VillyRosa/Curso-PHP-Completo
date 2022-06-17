<?php
require('config/conexao.php');

// VERIFICAÇÃO DE AUTENTICAÇÃO
$user = auth($_SESSION['TOKEN']);
if ($user) {
    echo "<h1>SEJA BEM-VINDO <b style='color:red;'>".$user['nome']."!</b></h1>";
    echo "<br><br><a style='background:green; color:white; padding:20px; text-decoration: none; border-radius: 5px;' href='logout.php'>Sair do sistema</a>";
} else {
    // REDIRECIONAR PARA LOGIN
    header('location: index.php');
}

// VERIFICAR SE TEM AUTORIZAÇÃO
// $sql = $pdo->prepare("SELECT * FROM usuarios WHERE token=? LIMIT 1");
// $sql->execute([$_SESSION['TOKEN']]);
// $usuario = $sql->fetch(PDO::FETCH_ASSOC);

// // SE NAO ENCONTRAR O USUARIO 
// if (!$usuario) {
//     return false;
// } else {
//     echo "<h1>SEJA BEM-VINDO <b style='color:red;'>".$usuario['nome']."!</b></h1>";
//     echo "<br><br><a style='background:green; color:white; padding:20px; border-radius: 5px;' href='logout.php'>Sair do sistema</a>";
// }
?>