<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
//    determinar time zone
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

    $agora = getdate();


//    criar elementos
    $ano = $agora["year"];
    $mes = strftime('%B');
    $dia = $agora["mday"];
    $hora = $agora["hours"];
    $minuto = $agora["minutes"];
    $segundo = $agora["seconds"];

    echo "$dia/$mes/$ano - $hora: $minuto: $segundo";
    ?>
    <body>
    </body>
</html>