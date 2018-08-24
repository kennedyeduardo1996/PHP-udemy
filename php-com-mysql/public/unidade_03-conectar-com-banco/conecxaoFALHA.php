<?php
//define('SERVER', 'localhost');
//define('BANCO', 'andes');
//define('SENHA', '');
//define('USUARIO', 'root');
//try {
//    $conexao = new PDO('mysql:host=' . SERVER . '; dbname=' . BANCO, USUARIO, SENHA);
//} catch(PDOException $e) {
//    echo "Erro gerado" . $e->getMessage();
//}


$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "andes";
$conexao = mysql_connect($servidor, $usuario, $senha, $banco);

if(mysqli_connect_errno()){
    die("Conexão falhou: " . mysqli_connect_errno());
}

$consulta_categorias = "SELECT * FROM categorias";
$categorias = mysqli_query($conexao, $consulta_categorias);
if(!$categorias){
    die("Falha na consultads ao banco");
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    </body>
<?php
    mysql_close($conexao);
//?>
</html>