<?php
session_start();

if(isset($_SESSION['userLogado'])) {
    $usuario = $_SESSION['userLogado'];
} else {
    header('Location: login.php');
}
?>
<html>
    <head>
        <title>Sistema de login</title>
    </head>
    <body>
        <center><h1>Bem-vindo <span style='color: green'><?=$usuario;?></span>.</h1></center>
        <center><a href='php/desconectar.php'>Desconectar</a></center>
    </body>
</html>