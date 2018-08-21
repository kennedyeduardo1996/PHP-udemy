<!doctype html>
<html>
<body>
<?php
$cont = 1;
$megasena = array();

while( $cont <= 6 ){
    $sorteio = rand(1,100);
    if(!in_array($sorteio ,$megasena)){
        $megasena[] = $sorteio;
        $cont++;
    }
}
sort($megasena);
?>
<pre>
        <?php
        print_r($megasena);
        ?>
</pre>



</body>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
</html>