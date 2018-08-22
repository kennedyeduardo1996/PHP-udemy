<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <pre>
        <?php
        print_r($_POST);

        ?>
    </pre>
    <?php
    $nome = isset($_POST["nome"])?$_POST["nome"]:"sem definição";
    $email = isset($_POST["email"])?$_POST["email"]:"sem definição";
    echo "Meu nome é ".$nome."<br>";
    echo "Meu email é ".$email."<br>";
    ?>
    </body>
</html>