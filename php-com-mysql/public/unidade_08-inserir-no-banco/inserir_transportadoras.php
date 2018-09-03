<?php require_once("../../conexao/conexao.php"); ?>

<?php
// insercao no banco
if(isset($_POST["nometransportadora"])) {
    $nome = $_POST["nometransportadora"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estados"];
    $cep = $_POST["cep"];
    $cnpj = $_POST["cnpj"];
    $telefone = $_POST["telefone"];

    $insert = "INSERT INTO transportadoras (nometransportadora,endereco,cidade,estadoID,cep,cnpj,telefone) VALUES (:nome,:endereco, :cidade, :estado,:cep, :cnpj, :telefone)";
    $inserir = $con->prepare($insert);
    $inserir->bindParam(':nome', $nome);
    $inserir->bindParam(':endereco', $endereco);
    $inserir->bindParam(':cidade', $cidade);
    $inserir->bindParam(':estado', $estado);
    $inserir->bindParam(':cep', $cep);
    $inserir->bindParam(':cnpj', $cnpj);
    $inserir->bindParam(':telefone', $telefone);
    $operacao_inserir = $inserir->execute();


    if(!$operacao_inserir) {
        die("Erro no banco");
    }

}

// selecao de estados
$select = "SELECT estadoID, nome FROM estados";
$lista_estados = $con->prepare($select);
$result = $lista_estados->execute();
if(!$result) {
    die("Erro no banco");
}

?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/crud.css" rel="stylesheet">
    </head>

    <body>
    <?php include_once("_incluir/topo.php"); ?>

    <main>
        <div id="janela_formulario">

            <form action="inserir_transportadoras.php" method="post">
                <input type="text" name="nometransportadora" placeholder="Nome da Transportadora">
                <input type="text" name="endereco" placeholder="Endereço">
                <input type="text" name="telefone" placeholder="Telefone">
                <input type="text" name="cidade" placeholder="Cidade">
                <select name="estados">
                    <?php

                    $lista_estados = $lista_estados->fetchAll(PDO::FETCH_ASSOC);
                    foreach($lista_estados as $linha) {
                        ?>
                        <option value="<?php echo $linha["estadoID"]; ?>">
                            <?php echo($linha["nome"]); ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
                <input type="text" name="cep" placeholder="CEP">
                <input type="text" name="cnpj" placeholder="CNPJ">
                <input type="submit" value="inserir">
            </form>
        </div>

    </main>

    <?php include_once("_incluir/rodape.php"); ?>
    </body>
    </html>

<?php
// Fechar conexao
$con = null;
?>