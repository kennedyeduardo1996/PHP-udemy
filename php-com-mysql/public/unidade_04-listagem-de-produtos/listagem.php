<?php require_once("../../conexao/conexao.php");
$query = $con->query("SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos;");
$produtos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
    <?php
    include_once("_incluir/topo.php");
    ?>

    <main>
        <?php
        foreach($produtos as $result) { ?>
            <ul>
                <li><?= $result["nomeproduto"] ?></li>
                <li><?= $result["tempoentrega"] ?></li>
                <li><?= $result["precounitario"] ?></li>
                <li><img src="<?= $result["precounitario"] ?>" alt=""></li>
            </ul>
        <?php } ?>

    </main>

    <?php
    include_once("_incluir/rodape.php");

    ?>
    </body>
    </html>

<?php
$con = null;
?>