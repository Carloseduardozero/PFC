<?php 


//Limpeza e destruição da sessão
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>RPG</title>
    </head>
    <body>
    <center>
        <div id="login">
        <form method="POST" action="../Controller/validar-login.php">
            <br><br><br> <h1>Login</h1><br><br><br><br>
            <h4>Usuário</h4>
            <p></p>
            <input type="text" name="login" placeholder="Nick" required=""><p></p>
            <h4>CPF</h4>
            <p></p>
            <input type="password" name="cpf" placeholder="000.000.000-00" required=""><br><p></p>
            <br><br>
            <input type="submit" value="Login">    
        </form>
        <form method="POST" action="Cadastro.php">
            <p></p>
            <input type="submit" value="Cadastrar">
        </form>
    </center>
    </div>
    </body>
</html>
