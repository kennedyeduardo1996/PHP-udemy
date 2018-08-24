<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>
<body>
<?php

//funciona sem esse arquivo e mostra erro
include("pagina1.php");

//não funciona sem esse arquivo
require("pagina2.php");

//adiciona o arquivo uma vez mesmo se colocar o codigo novamente
require_once("pagina2.php");
include_once("pagina1.php");


?>
</body>
</html>