<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
    function retornarDiaria($salario,$dias,$cotacao){
        $real = number_format($salario/$dias,2);
        $dolar = number_format(($salario/$dias)/$cotacao,2);

        return array($real, $dolar);
    }
//    $diaria_array = retornarDiaria(2000,15,2.5);
//    echo "Diaria em R$ ".$diaria_array[0]."<br>";
//    echo "Diaria em US$ ".$diaria_array[1]."<br>";
//    ou
    list($result_real,$result_dolar) = retornarDiaria(2000, 15, 2.5);
    echo "Diaria em R$ " . $result_real . "<br>";
    echo "Diaria em US$ " . $result_dolar . "<br>";
    ?>
    </body>
</html>