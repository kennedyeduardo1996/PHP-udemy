<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
    $funcionario = array(
            "Nome" => "Bruno",
            "Estado" => "Solteiro",
            "RG" => "34.435.345-9",
            "Salario" => 5000,
            "Endereço" => "Patrocínio Pta"
    );

    foreach($funcionario as $dados => $valor){
        echo $dados.": ".$valor. "<br>";
    }
    
    ?>
    </body>
</html>