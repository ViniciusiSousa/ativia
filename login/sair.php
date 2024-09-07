<?php
session_unset();
unset($_SESSION['usuario']);
unset($_SESSION['logado']);
header("location: index.php");
?>