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
        <link rel="stylesheet" type="text/css" href="./estilo/style_loginCadastro.css">
        <title>RPG</title>
    </head>
    <body>
            <!-- Menu docszar -->
            <nav id="menu">
                <ul>
                    <li><a><img src="./../img/DZ.png" width="250px" height="70px"></a></li>
                </ul>
            </nav>

            <div id="login">
                <form method="POST" action="../Controller/validar-login.php">
                <h1>Entrar</h1>
                <input type="text" name="usuario" placeholder="Usuário" required>
                
                <input type="password" name="senha" placeholder="Senha" required>
                
                <input class="btn-entrar" type="submit" value="Entrar">    
            </form>
            
            <a class="link-cadastro" href="cadastro.php"> Já é cadastrado? Cadastre-se!</a> <p></p>

            <a class="link-recuperarsenha" src="" >Recuperar senha!</a>
            <!--<form method="POST" action="Cadastro.php">
                <p></p>
                <input class="btn-cadastrar" type="submit" value="Cadastrar">
            </form>-->

            </div>   
    </body>
</html>


