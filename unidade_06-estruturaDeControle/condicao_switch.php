<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
<?php
$dia = "terca";
switch($dia) {

    case "quinta":
        echo "Hoje ja é quinta <br> ";
        break;
    case "sexta":
        echo "Hoje finalmente é sexta <br> ";
        break;
    case "sabado":
        echo "Hoje é um incrivel sabado <br> ";
        break;
    case "domingo":
        echo "Amanha é segunda <br> ";
        break;
    default:
        echo "Trabalha ai que está chegando";
}

?>
</body>
</html>