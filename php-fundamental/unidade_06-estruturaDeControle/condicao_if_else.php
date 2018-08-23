<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
    $a = 5;
    $b = 5;
    if($a > $b){
        echo "$a é maior q $b"."<br>";
    }else if($a < $b){
        echo "$a é menor q $b"."<br>";
    }else{
        echo "$a é igual $b";
    }

    ?>
    </body>
</html>