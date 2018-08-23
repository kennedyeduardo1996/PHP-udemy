<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>
<body>
<?php
    $salada = array("Maçã", "Abacate", "Laranja", "Pêra");

//  pesquisa pelo elemento no array
//  echo "Existe o elemento? " . in_array("Pêra",$salada);

//    pesquisa pela posição
  echo "Existe o elemento? " . array_search("Pêra",$salada);
?>
</body>
</html>