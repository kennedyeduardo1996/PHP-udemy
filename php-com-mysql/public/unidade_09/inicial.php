<?php require_once("../../conexao/conexao.php"); ?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
    <?php
    include_once("_incluir/topo.php");

    ?>
    <header>
        <div id="header_central">
            <img src="assets/logo_andes.gif">
            <img src="assets/text_bnwcoffee.gif">
        </div>
    </header>

    <main>

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