<?php require_once("../../conexao/conexao.php"); ?>
<?php

    if(isset($_POST['enviar'])) {


        $arquivo_temporario = $_FILES['upload_file']['tmp_name'];
//        pega apenas e nome e não a extensao
        $arquivo = basename($_FILES['upload_file']['name']);
        $diretorio = 'upload';

        if (move_uploaded_file($arquivo_temporario, $diretorio.'/'.$arquivo)){
            $mensagem = "Arquivo publicado";
        }else{
            $numeroLinha = $_FILES['upload_file']['error'];
            $mensagem = $array_erro[$numeroLinha];
        }

    }
?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
        <style>
            input {
                display: block;
                margin: 30px;
            }
        </style>
    </head>

    <body>
    <?php
        include_once("_incluir/topo.php");
    ?>

    <main>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="upload_file">
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
            if (isset($mensagem)){
                echo $mensagem;
            }
        ?>
    </main>

    <?php
        include_once("_incluir/rodape.php");
    ?>
    </body>
    </html>

<?php
    // Fechar conexao
    $con = null;
?>