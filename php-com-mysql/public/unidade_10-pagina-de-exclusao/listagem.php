<?php require_once("../../conexao/conexao.php");
//teste de segurança
session_start();

//fim do teste de segurança

//determinar localidade
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

//pesquisa por produto
if(isset($_GET["produto_pesquisa"])) {
    $pesquisa = "%" . $_GET["produto_pesquisa"] . "%";
    $sql = "SELECT *  FROM transportadoras t INNER JOIN estados e ON t.estadoID = e.estadoID WHERE  nometransportadora LIKE :pesquisa ;";
    $produtos = $con->prepare($sql);
    $produtos->bindParam(':pesquisa', $pesquisa);
} else {
    $sql = "SELECT *  FROM transportadoras t INNER JOIN estados e ON t.estadoID = e.estadoID;";
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
        <style>
            div#janela_transportadoras {
                width:600px;
                margin:60px auto 0;
                border:1px solid #EDEDDC;
                font-family:sans-serif;
                font-size:13px;
                color:#9A9668;
            }

            div#janela_transportadoras ul {
                margin:0;padding:0;
                border-bottom:1px solid #EDEDDC;
            }

            div#janela_transportadoras ul:last-child {
                border-bottom:none;
            }

            div#janela_transportadoras ul:nth-child(odd) {
                background:#EDEDDC;
            }

            div#janela_transportadoras li {
                list-style:none;
                display:inline-block;

            }

            div#janela_transportadoras li:nth-child(1) {
                width:300px;
                padding:8px 4px;
            }

            div#janela_transportadoras li:nth-child(2) {
                width:70px;
                padding:5px 2px;
            }

            div#janela_transportadoras li:nth-child(3) a {
                color:#9A9668;
                padding:5px 40px;
            }
            div#janela_transportadoras li:nth-child(4) a {
                color:#9A9668;
            }
        </style>
    </head>


    <body>
    <?php
    include_once("_incluir/topo.php");

    ?>

    <main>

        <div id="janela_pesquisa">
            <form action="listagem.php" method="get">
                <input type="text" name="produto_pesquisa" placeholder="Pesquisa">
                <input type="image" name="pesquisa" src="assets/botao_search.png">
            </form>
        </div>

        <div id="janela_transportadoras">
            <?php
            foreach($produtos as $result) { ?>
                <ul>
                    <li><h3><?= $result["nometransportadora"] ?></h3></li>
                    <li> <?= $result["nome"] ?></li>
                    <li><a href="alteracao.php?codigo=<?= $result["transportadoraID"] ?>">Alterar</a> </li>
                    <li><a href="exclusao.php?codigo=<?= $result["transportadoraID"] ?>">excluir</a> </li>

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