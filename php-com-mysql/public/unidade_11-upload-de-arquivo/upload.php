<?php require_once("../../conexao/conexao.php"); ?>
<?php
    $array_erro = array(
        UPLOAD_ERR_OK => "Sem erro.",
        UPLOAD_ERR_INI_SIZE => "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
        UPLOAD_ERR_FORM_SIZE => "O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML",
        UPLOAD_ERR_PARTIAL => "O upload do arquivo foi feito parcialmente.",
        UPLOAD_ERR_NO_FILE => "Nenhum arquivo foi enviado.",
        UPLOAD_ERR_NO_TMP_DIR => "Pasta temporária ausente.",
        UPLOAD_ERR_CANT_WRITE => "Falha em escrever o arquivo em disco.",
        UPLOAD_ERR_EXTENSION => "Uma extensão do PHP interrompeu o upload do arquivo."
    );
    if(isset($_POST['enviar'])) {
        $numeroLinha = $_FILES['upload_file']['error'];
        $mensagem = $array_erro[$numeroLinha];

        echo "<pre>";
            print_r($_FILES['upload_file']);

        echo "</pre>";

        echo "</hr>".$mensagem;
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