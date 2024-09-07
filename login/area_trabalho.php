<?php session_start(); ?>
<html>
    <body>
        <?php
        if(isset($_SESSION['usuario'])){
        echo '<h1> Bem vindo,  ' .$_SESSION['usuario'].'<h1>';
    }else{
        header('location: index.php');
    }
    ?>
    <a href="sair.php" > Sair </a>
    </body>
</html>