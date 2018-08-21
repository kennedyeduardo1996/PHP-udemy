<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
    $salada = array("Banana", "Maçã", "Uva", "Melância", "Abacate");
    foreach($salada as $fruta){
        echo $fruta."<br>";
    }

    ?>
    </body>
</html>