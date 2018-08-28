<header>
    <div id="header_central">
        <?php

        if(isset($_SESSION['user_portal'])) {
            $idser = $_SESSION['user_portal'];
            $sql = "SELECT nomecompleto FROM clientes WHERE clienteID = :iduser";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':iduser', $idser);
            //retorna 1 se a consulta foi realizada
            $resultado = $stmt->execute();
            $nomecompleto = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($nomecompleto as $nome){
            ?>
            <div id="header_saudacao">
                <h5>Bem vindo, <?=$nome["nomecompleto"] ?></h5>
            </div>
                    <a href="logout.php"><input type="button" value="Logout"></a>
            <?php
        }}
        ?>
        <img src="assets/logo_andes.gif">
        <img src="assets/text_bnwcoffee.gif">
    </div>
</header>