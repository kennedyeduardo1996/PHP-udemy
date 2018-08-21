<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
<?php
$salario = 800;
$premio = "800";
if($salario == $premio) {
    echo "Salario é igual a premio"."<br>";
} else {
    echo "Salario NÂO é igual a premio"."<br>";
}
//identico
if($salario === $premio) {
    echo "Salario é identico a premio"."<br>";
} else {
    echo "Salario NÂO é identico a premio"."<br>";
}


$fumante = true;
if($fumante == true) {
    echo "Você é fumante"."<br>";
} else {
    echo "Você não é fumante"."<br>";
}

$dia = "sabado";
if($dia == "sabado" || $dia == "domingo"){
    echo "dia de descancar";
}else{
    echo "dia de trabalhar";
}

?>
</body>
</html>