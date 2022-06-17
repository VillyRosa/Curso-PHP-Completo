<?php
require('config/conexao.php');

if (isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // RECEBER OS DADOS VINDOS DO POST E LIMPALOS
    $email = limparPost($_POST['email']);
    $senha = limparPost($_POST['senha']);
    $senha_cript = sha1($senha);

    // VERIFICAR SE EXISTE ESTE USUÁRIO
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");
    $sql->execute([$email,$senha_cript]);
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    if ($usuario) {
        // EXISTE O USUÁRIO
        // VERIFICAR SE O CADASTRO FOI CONFIRMADO
        if ($usuario['status'] == "confirmado") {
             // CRIAR UM TOKEN
            $token = sha1(uniqid().date('d-m-Y-H-i-s'));

            // ATUALIZAR O TOKEN DESTE USUÁRIO NO BANCO
            $sql = $pdo->prepare("UPDATE usuarios SET token=? WHERE email=? AND senha=?");
            if ($sql->execute([$token,$email,$senha_cript])) {
                // ARMAZENAR ESTE TOKEN NA SESSAO (SESSION)
                $_SESSION['TOKEN'] = $token;
                header('location: restrita.php');
            }
        } else {
            $erro_login = "Por favor confirme seu cadastro no email!";
        }
       
    } else {
        $erro_login = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Login</title>
</head>
<body>
    <form method="post">
        <h1>Login</h1>

        <?php if (isset($_GET['result']) && ($_GET['result'] == "ok")){ ?>
            <div class="sucesso animate__animated animate__rubberBand">
                Cadastrado com sucesso!
            </div>
        <?php } ?>

        <!-- CAIXA DE ERROS -->
        <?php if (isset($erro_login)) { ?>
            <div style='text-align: center;' class="erro-geral animate__animated animate__rubberBand">
                <?php echo $erro_login; ?>
            </div>
        <?php } ?>

        <div class="input-group">
            <img class="input-icon" src="img/user.png">
            <input type="email" name="email" placeholder="Digite seu email" required>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/lock.png">
            <input type="password" name="senha" placeholder="Digite sua senha" required> 
        </div>
        
        <button class="btn-blue" type="submit">Fazer Login</button>
        <a href="cadastrar.php">Ainda não tenho cadastro</a>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <?php if (isset($_GET['result']) && ($_GET['result'] == "ok")){ ?>
    <script>
        setTimeout(() => {
            $('.sucesso').addClass('oculto');
        }, 3000);
    </script>
    <?php } ?>
</body>
</html>