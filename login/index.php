<?php session_start(); ?>
<html>
    <body>
        <?php 
        if(isset($_SESSION["msg"])){
         echo '<h1 classe="danger">' .$_SESSION["msg"] .'</h1>';
        } 
        ?>
        <form action="processa_login.php" method="post">
            <input type="text" name="usuario"/>
            <input type="password" name="senha"/>
            <input type="submit" value="Entrar"/>
        </form>
    </body>
</html>