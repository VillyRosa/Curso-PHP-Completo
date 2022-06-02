<?php

    if (isset($_POST['user']) && isset($_POST['password'])) {
        $usuario = limpaPost($_POST['user']);
        $password = limpaPost($_POST['password']);
        echo "<h2>Usuário: $usuario | Senha: $password</h2>";
    } else {
        echo "Preencha todos os campos";
    }

    function limpaPost($valor) {
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }

?>