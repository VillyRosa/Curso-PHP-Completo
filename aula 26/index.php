<?php

    setcookie('nome', 'Villy', time()+(86400 * 30));

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
    <h1>Cookie 🍪</h1>

    <?php if (isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
        echo "O nome é $nome";
    } else {
        echo "<p>Não tem nenhum Cookie</p>";
    } ?>

</body>
</html>