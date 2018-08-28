<?php require_once("../../conexao/conexao.php");
session_start();
if(isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM clientes WHERE usuario = :usuario AND senha = :senha";
    $stmt = $con->prepare($sql);
    //$stmt->bindParam('ss', $usuario, $senha);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    //retorna 1 se a consulta foi realizada
    $resultado = $stmt->execute();
    $acesso = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(!$resultado) {
        die("Falha na consulta ao banco<br>");
    }
//    se a var estiver vazia
    if(empty($acesso)){
        $mensagem = "Login sem sucesoo";
    } else{
        foreach($acesso as $login){
            $_SESSION["user_portal"] = $login["clienteID"];
        }
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
        <link href="_css/login.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <div id="header_central">
            <img src="assets/logo_andes.gif">
            <img src="assets/text_bnwcoffee.gif">
        </div>
    </header>
    <main>
        <div id="janela_login">
            <form action="login.php" method="post">
                <h2>Tela de Login</h2>
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="Login">
                <?php
                if(isset($mensagem)){
                ?>
                    <p><?=$mensagem ?></p>
                <?php
                }
                ?>
            </form>
        </div>
    </main>

    <footer>
        <div id="footer_central">
            <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
        </div>
    </footer>
    </body>
    </html>

<?php
// Fechar conexao
$con = null;
?>