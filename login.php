<?php
session_start();

if(isset($_SESSION['userLogado'])) {
    header('Location: index.php');
}
?>
<html>
    <head>
        <title>Tela de login</title>
    </head>
    <body>
        <form method='POST' action='php/entrarConta.php'>
            <input type='text' required='required' name='usuario' placeholder='Nome de usuário'>
            <input type='password' required='required' name='senha' placeholder='Senha'>
            <input type='submit' value='ENTRAR'>
        </form>
    </body>
</html>