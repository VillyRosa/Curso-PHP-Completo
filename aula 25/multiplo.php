<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Upload de Arquivos</title>
</head>
<body>
    
    <div class="container">
        <h1 class="mt-5 text-center">Upload de Arquivos</h1><br>
        <form class="m-3" method="post" enctype="multipart/form-data" action="">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo[]" multiple aria-describedby="arquivo" aria-label="Upload" required>
                <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
              </div>
        </form>
    </div>

    <?php

        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }

            return $file_ary;
        }

        if (isset($_POST['enviar'])) {
            // echo '<pre>';
            // var_dump($_FILES);
            // echo '</pres>';
            
            $arquivoArray = reArrayFiles($_FILES['arquivo']);

            foreach ($arquivoArray as $arquivo) {
                // print 'Nome Arquivo: ' . $arquivo['name'];
                // print 'Tipo Arquivo: ' . $arquivo['type'];
                // print 'Tamanho Arquivo: ' . $arquivo['size'];

                // VALIDAÇÕES  
            $tamanhoMax = 2097152; // 2MB em Bytes
            $permitido = ["jpg", "png", "jpeg", "mp4", "pdf"];
            $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);

            // VERIFICAR SE O TAMANHO É PERMITIDO
            $novoNome = uniqid().".$extensao";
            if ($arquivo['size'] >= $tamanhoMax) {
                echo '<div class="alert alert-danger m-5 text-center" role="alert">
                <b>'.$novoNome.'</b> :ERRO: Tamanho maior que o permitido!
                    </div>';
            } else {
                // VERIFICAR SE A EXTENSAO É PERMITIDA
                if (in_array($extensao, $permitido)) {
                    //echo 'Permitido!';
                    $pasta = 'imagens/';
                    if (!is_dir($pasta)) {
                        mkdir($pasta, 0755);
                    }

                    $tmp = $arquivo['tmp_name'];

                    if (move_uploaded_file($tmp,$pasta.$novoNome)) {
                        echo '<div class="alert alert-success m-5 text-center" role="alert">
                                <b>'.$novoNome.'</b> : Upload realizado com sucesso!
                            </div>';
                    } else {
                        echo '<div class="alert alert-danger m-5 text-center" role="alert">
                        <b>'.$novoNome.'</b> :ERRO: Não foi possível fazer o upload!
                            </div>';
                    }

                } else {
                    echo '<div class="alert alert-danger m-5 text-center" role="alert">
                    <b>'.$novoNome.'</b> :ERRO: Extensão não permitida!
                        </div>';
                }
            }
            }          
            
        }

    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>