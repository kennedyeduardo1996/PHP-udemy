<?php
$nome = null;
$endereço = "";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
    <?php
    echo "a variavel é null? ".is_null($nome)."<br>";
    echo "a variavel é null? ".is_null($endereço)."<br><br><br>";

    //    empty verifica se a var está vazia
    echo "a variavel esta vazia? ".empty($nome)."<br>";
    echo "a variavel esta vazia? ".empty($endereço)."<br>";
    ?>
    </body>
</html>