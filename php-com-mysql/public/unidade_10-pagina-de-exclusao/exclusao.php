<?php require_once("../../conexao/conexao.php");
// selecao de estados
$select = "SELECT estadoID, nome FROM estados";
$lista_estados = $con->prepare($select);
$result = $lista_estados->execute();
if(!$result) {
    die("Erro no banco");
}


//Consulta a tabela  de transportadora do banco
if(isset($_GET["codigo"])) {
    $id = $_GET["codigo"];
    $sql = "SELECT t.*, e.nome FROM transportadoras t INNER JOIN estados e ON t.estadoID = e.estadoID WHERE transportadoraID = :id ;";
    $stm = $con->prepare($sql);
    $stm->bindParam(':id', $id);
    $resultado = $stm->execute();
    $transportadora = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(!$resultado) {
        die("Erro no banco");
    }
} else {
    header("Location: listagem.php");
}

//atualizar no banco de dados
if(isset($_POST["nometransportadora"])) {

    $tID = $_POST["transportadoraID"];

    $delete = "DELETE FROM transportadoras WHERE transportadoraID = :transportadoraID ";
    $excluir = $con->prepare($delete);
    $excluir->bindParam(':transportadoraID', $tID);
    $operacao_excluir = $excluir->execute();


    if(!$operacao_excluir) {
        die("Erro no banco");
    }else {
        header("Location: listagem.php");
    }

}

?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>


    <body>
    <?php
    include_once("_incluir/topo.php");

    ?>
    <?php foreach($transportadora as $tranport) { ?>
    <main>
        <div id="janela_formulario">
            <form action="exclusao.php" method="post">
                <h2>Alteração de Transportadora</h2>
                <input type="hidden" name="transportadoraID" id="transportadoraID" value="<?= $tranport['transportadoraID'] ?>"><br>
                <label for="nometransportadora">Nome da Transportadora</label>
                <input type="text" name="nometransportadora" id="nometransportadora" value="<?= $tranport['nometransportadora'] ?>"><br>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" value="<?= $tranport['endereco'] ?>"><br>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" value="<?= $tranport['telefone'] ?>"><br>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" value="<?= $tranport['cidade'] ?>"><br>
                <label for="estados">Estado</label>
                <select name="estados" id="estados">

                        <option value="<?= $tranport['estadoID'] ?>">
                            <?= $tranport["nome"] ?>
                        </option>

                    <?php
                    $meuestado = $tranport['estadoID'];
                    $lista_estados = $lista_estados->fetchAll(PDO::FETCH_ASSOC);
                    foreach($lista_estados as $linha) {
                        ?>
                        <option value="<?php echo $linha["estadoID"]; ?>" <?= ($linha["estadoID"] == $meuestado)?"selected":"" ?> >
                            <?php echo($linha["nome"]); ?>
                        </option>
                        <?php
                    }
                    ?>
                </select><br>
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" value="<?= $tranport['cep'] ?>"><br>
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" value="<?= $tranport['cnpj'] ?>"><br>
                <input type="submit" value="Confirmar exclusão">
            </form>
        </div>
    </main>
    <?php } ?>
    <?php
    include_once("_incluir/rodape.php");

    ?>
    </body>
    </html>

<?php
// Fechar conexao
$con = null;
?>