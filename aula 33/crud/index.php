<?php
require('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionando Dados</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            font-family: Arial;
        }

        th,td {
            padding: 10px;
            text-align: center;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Aula inserindo dados</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu email" required>
        <button type="submit" name="salvar">Salvar</button><br><br>
    </form>

    <?php
    // INSERIR UM DADO NO BANCO (MODO SIMPLES)
    // $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,'Villy','villyrosa@hotmail.com','13/06/2022')");
    // $sql->execute();

    // MODO CORRETO ANTI SQL INJECTION
    if (isset($_POST['salvar']) && isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = limparPost($_POST['nome']);
        $email = limparPost($_POST['email']);
        $data = date('d/m/Y');

        // VALIDAÇÃO DE CAMPO VAZIO
        if ($nome == "" || $nome == null) {
            echo "<b style='color: red;'>Nome não pode ser vazio<b/>";
            exit();
        }
        if ($email == "" || $email == null) {
            echo "<b style='color: red;'>E-mail não pode ser vazio<b/>";
            exit();
        }

        // VALIDAÇÕES DE NOME E EMAIL

        // VERIFICAR SE NOME ESTÁ CORRETO
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            echo "<b style='color: red;'>Somente permitidos letras e espaços em branco para o nome.<b/>";
            exit();
        }

        // VERIFICAR SE É UM EMAIL VALIDO
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<b style='color: red;'>Formato de email inválido<b/>";
            exit();
        }

        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
        $sql->execute([$nome,$email,$data]);

        echo "<b style='color: green;'>Cliente inserido com sucesso!<b/>";
    }
    ?>

    <?php

        // SELECIONAR OS DADOS DA TABELA
        $sql = $pdo->prepare("SELECT * FROM clientes");
        $sql->execute();
        $dados = $sql->fetchAll();

        // EXEMPLO COM FILTRAGEM
        // $sql = $pdo->prepare("SELECT * FROM clientes WHERE nome = ?");
        // $nome = 'Villy Oliveira Rosa';
        // $sql->execute([$nome]);
        // $dados = $sql->fetchAll();

        // echo "<pre>";
        // print_r($dados);
        // echo "</pre>";

    ?>

    <?php
        if(count($dados) > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>";
            
            foreach ($dados as $chave => $valor) {
                echo "<tr>
                        <td>".$valor['id']."</td>
                        <td>".$valor['nome']."</td>
                        <td>".$valor['email']."</td>
                    </tr>";
            }
                
            echo "</table>";
        } else {
            echo "<p>Nenhum cliente cadastrado</p>";
        }
    ?>

</body>
</html>