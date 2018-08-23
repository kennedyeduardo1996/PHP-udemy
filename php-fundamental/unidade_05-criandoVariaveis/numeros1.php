<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        // Multiplicacao e Divisao
        echo "Trimestre ".$meses * $salario."<br>";

        // Exponencial
        echo "Exponencial ".pow(9,3)."<br>";

        // Raiz Quadrada
        echo "Raiz Quadrada ".sqrt(36)."<br>";

        // Randômico Generica
        echo "Randômico Generica ".rand()."<br>";

        // Randômico entre um intervalo
        echo "Randômico Generica ".rand(1,10)."<br>";

        // Valor absoluto
        echo "Valor Absoluto ".abs(-10)."<br>";

        ?>
    </body>
</html>