<?php require_once("../../conexao/conexao.php");
session_start();
?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
    <header>
        <div id="header_central">
            <img src="assets/logo_andes.gif">
            <img src="assets/text_bnwcoffee.gif">
        </div>
    </header>

    <main>
        <?php
//        exclui a var de sessao
        unset($_SESSION["usuario"]);

        //Destrói todas var de sessao
        session_destroy();
        header("Location: login.php");


        ?>

    </main>

    <footer>
        <div id="footer_central">
            <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
        </div>
    </footer>
    </body>
    </html>

<?php
// Fechar conexao
$con = null;
?>