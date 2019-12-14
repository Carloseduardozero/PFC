<?php
  
  session_start();
  if(!empty($_SESSION['msg'])){
        
        echo $_SESSION['msg'];
    
    }
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

        <div id="cadastro">
            <form method="POST" action="../Controller/validar-cadastro.php">
                
                <h1>Cadastro</h1>
                
                <input type="text" name="nome" id="nome" placeholder="Nome" required> <br>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required> <br>
                <input type="email" name="email" id="email" placeholder="@hotmail.com" required> <br>
                <input type="password" name="senha1" id="senha1" placeholder="*******" required> <br>
                <input type="password" name="senha2" id="senha2" placeholder="*******" required> <p></p>
                <input class="btn-entrar" type="submit" value="Cadastrar">

            </form>

            <form method="POST" action="../View/index.php">
            <a class="link-cadastro" href="index.php"> Entrar!</a>
            </form>
        </div>

    </body>
</html>

