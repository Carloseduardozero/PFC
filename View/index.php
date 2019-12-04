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
        <title>RPG</title>
    </head>
    <body>

        <div id="login">
            <form method="POST" action="../Controller/validar-login.php">
            <h1>Entrar</h1>
            <h4>Usuário</h4>
            <input type="text" name="usuario" placeholder="" required>
            
            <h4>Senha</h4>
            <input type="password" name="senha" placeholder="" required>
            
            <input type="submit" value="Entrar">    
        </form>
        
        <form method="POST" action="Cadastro.php">
            <p></p>
            <input type="submit" value="Cadastrar">
        </form>

        </div>
    </body>
</html>
