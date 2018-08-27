<?php require_once("../../conexao/conexao.php");
if(isset($_GET["codigo"])) {
    $produto_id = $_GET["codigo"];
} else {
    Header("Location: inicial.php");
}
//$consultaquery = $con->query("SELECT * FROM produtos WHERE produtoID = {$produto_id};");
//$consulta = $consultaquery->fetchAll(PDO::FETCH_ASSOC);

//por medida de segurança
$sql = "SELECT * FROM produtos WHERE produtoID = :id";
$stmt = $con->prepare($sql);
$stmt->bindParam(':id', $produto_id);
$resultado = $stmt->execute();


?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet">
    </head>

    <body>
    <?php include_once("_incluir/topo.php"); ?>

    <main>
        <div id="detalhe_produto">
            <?php
            if(!$resultado) {
                die("Falha ao consultar o banco de dados");
            } else {
                $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($produto as $detalhes) { ?>
                    <ul>
                        <li class="imagem"><img src="<?= $detalhes["imagemgrande"] ?>"></li>
                        <li><h2><?= $detalhes["nomeproduto"] ?></h2></li>
                        <li>Descrição: <?= $detalhes["descricao"] ?></li>
                        <li>Codigo de Barra: <?= $detalhes["codigobarra"] ?></li>
                        <li>Tempo de Entrega: <?= $detalhes["tempoentrega"] ?> dias</li>
                        <li>Preço Revenda: R$ <?= number_format($detalhes["precorevenda"], 2, ",", ".") ?></li>
                        <li>Preço Unitario: R$ <?= number_format($detalhes["precounitario"], 2, ",", ".") ?></li>
                        <li>Estoque: <?= $detalhes["estoque"] ?></li>
                    </ul>
                <?php }
            } ?>
        </div>
    </main>

    <?php include_once("_incluir/rodape.php"); ?>
    </body>
    </html>

<?php

?>