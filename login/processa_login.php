<?php
session_start();
if(isset($_POST["usuario"]) && isset($_POST["senha"]) ){

    $usario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    if($usario == "admin" &&  $senha == "admin"){
        $_SESSION["usuario"] = $usario;
        $_SESSION["logado"] = true;
        header("location: area_trabalho.php");
    }else{
        $_SESSION['msg' ] = "Usuário ou senha inválido";
        header("location: index.php");
    }

}


?>