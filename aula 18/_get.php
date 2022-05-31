<?php

    // Método $_GET
    if (isset($_GET['nome'])){
        $nome = htmlspecialchars($_GET['nome']);
    } else {
        $nome = "Mundo!";
    }

    if (isset($_GET['cor'])){
        $cor = htmlspecialchars($_GET['cor']);
    } else {
        $cor = "white";
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        body{
            background-color: <?php echo $cor; ?>;
        }
    </style>

    <h1>Olá <?php echo $nome; ?></h1>

    <a href="index.php?nome=Villy&cor=gray">Ir para Villy</a><br>
    <a href="index.php?nome=Billy&cor=yellow">Ir para Billy</a><br>
    <a href="index.php?nome=Cilly&cor=pink">Ir para Cilly</a><br>
    <a href="index.php?nome=Dilly&cor=green">Ir para Dilly</a>
    
</body>
</html>