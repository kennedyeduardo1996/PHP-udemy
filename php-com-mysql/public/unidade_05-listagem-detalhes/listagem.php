
<?php require_once("../../conexao/conexao.php");
//determinar localidade
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
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
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
    <?php
    include_once("_incluir/topo.php");

    ?>

    <main>
        <div id="listagem_produtos">
            <?php
            foreach($produtos as $result) { ?>
                <ul>
                    <li class="imagem">
                        <a href="detalhe.php?codigo=<?=$result['produtoID'] ?>">
                            <img src="<?= $result["imagempequena"] ?>">
                        </a>
                    </li>
                    <li><h3><?= $result["nomeproduto"] ?></h3></li>
                    <li>Tempo de Entrega: <?= $result["tempoentrega"] ?></li>
                    <li>Preço Unitario: R$ <?= number_format($result["precounitario"], 2, ",", ".") ?></li>
                </ul>
            <?php } ?>
        </div>
    </main>

    <?php
    include_once("_incluir/rodape.php");

    ?>
    </body>
    </html>

<?php
$con = null;
?>