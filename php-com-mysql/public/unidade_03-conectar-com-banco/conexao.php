<?php
require_once("../../conexao/conexao.php");
//criando uma consulta
$query = $con->query("SELECT nomeproduto, tempoentrega FROM produtos;");

//passando a consulta para var como um array associative
$categorias = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
<?php
//passando os dados da consulta para uma lista
foreach($categorias as $registro) {
    ?>
    <ul>
        <li><?php echo $registro["nomeproduto"] . ": Entrega em " . $registro["tempoentrega"] . " dias." ?></li>
    </ul>
<?php } ?>
</body>

</html>
<?php
//fechar banco e limpar servidor
$categorias = null;
$con = null;
?>

