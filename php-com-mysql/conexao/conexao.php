<?php
define('SERVER', 'localhost');
define('BANCO', 'andes');
define('SENHA', '');
define('USUARIO', 'root');
try {
    $con = new PDO('mysql:host=' . SERVER . '; dbname=' . BANCO, USUARIO, SENHA);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->exec("set names utf8");
} catch(PDOException $e) {
    echo "Erro gerado" . $e->getMessage();
}
?>