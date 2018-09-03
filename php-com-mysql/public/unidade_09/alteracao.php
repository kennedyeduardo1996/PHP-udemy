<?php require_once("../../conexao/conexao.php"); ?>

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
    <?php
    include_once("_incluir/topo.php");

    ?>

    <main>
        <div id="janela_formulario">
            <form action="alteracao.php" method="post">
                <h2>Alteração de Transportadora</h2>
                <label for="nometransportadora">Nome da Transportadora</label>
                <input type="text" name="nometransportadora" id="nometransportadora">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
                <label for="estados">Estado</label>
                <select name="estados" id="estados">
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
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj">
                <input type="submit" value="inserir">
            </form>
        </div>
    </main>
    <?php
    include_once("_incluir/rodape.php");

    ?>
    </body>
    </html>

<?php
// Fechar conexao
$con = null;
?>