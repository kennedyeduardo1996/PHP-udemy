<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
    $data1 = new DateTime('2019-03-21');
    $data2 = new DateTime('2018-08-23');
    $intervalo = $data1->diff($data2);

    ?>
    <pre>
        <?php
        print_r($intervalo);
        ?>
    </pre>
    <br>
    <br>
    <pre>
        <?php
        print_r($intervalo->format("%r%a"));
        ?>
    </pre>
    <body>
    </body>
</html>