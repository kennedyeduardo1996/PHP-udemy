<?php
//array associative
$agenda = array(
    "nome" => "Kennedy",
    "sobrenome" => "Silva",
    "salario" => 3500
);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>
<body>

    <pre>
        <?php
        print_r($agenda);
        echo $agenda[0]."<br>";
        ?>
    </pre>
</body>
</html>