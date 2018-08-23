<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
//    for($cont = 1; $cont < 7; $cont++){
//        echo rand(1,100)."<br>";
//    }
//    ou
    for($cont = 1;  ;$cont++){
        if($cont >= 7){
            break;
        }
        echo rand(1,100)."<br>";
    }
    ?>
    </body>
</html>