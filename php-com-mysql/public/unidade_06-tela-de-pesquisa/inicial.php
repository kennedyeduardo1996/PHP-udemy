<?php require_once("../../conexao/conexao.php");
//determinar localidade
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
if(isset($_GET["produto_pesquisa"])) {
    $pesquisa = "%" . $_GET["produto_pesquisa"] . "%";
    $sql = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos WHERE nomeproduto LIKE :pesquisa ;";
    $produtos = $con->prepare($sql);
    $produtos->bindParam(':pesquisa', $pesquisa);
} else {
    $sql = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos;";
    $produtos = $con->prepare($sql);

}

$resultado = $produtos->execute();
$produtos = $produtos->fetchAll(PDO::FETCH_ASSOC);

?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
        <link href="_css/produto_pesquisa.css" rel="stylesheet">
    </head>

    <body>
    <?php
    include_once("_incluir/topo.php");

    ?>

    <main>

        <div id="janela_pesquisa">
            <form action="inicial.php" method="get">
                <input type="text" name="produto_pesquisa" placeholder="Pesquisa">
                <input type="image" name="pesquisa" src="assets/botao_search.png">
            </form>
        </div>

        <div id="listagem_produtos">
            <?php
            foreach($produtos as $result) { ?>
                <ul>
                    <li class="imagem">
                        <a href="detalhe.php?codigo=<?= $result['produtoID'] ?>">
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