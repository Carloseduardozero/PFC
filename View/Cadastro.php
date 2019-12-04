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

        <title>RPG</title>
    </head>
    <body>

        <div id="cadastro">
            <form method="POST" action="../Controller/validar-cadastro.php">
                
                <h1>Cadastro</h1>
                
                <label for="nome">Nome: </label> 
                <input type="text" name="nome" id="nome" placeholder="Nome" required>


                <label for="usuario">Usuario: </label> 
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>


                <label for="email">E-mail: </label> 
                <input type="email" name="email" id="email" placeholder="@hotmail.com" required>


                <label for="senha1">Senha: </label> 
                <input type="password" name="senha1" id="senha1" placeholder="*******" required>


                <label for="password">Confirme sua senha:</label>
                <input type="password" name="senha2" id="senha2" placeholder="*******" required>
                

                <input type="submit" value="Cadastrar">

            </form>

            <form method="POST" action="../View/index.php">
                <h4> Possui conta? </h4> <input type="submit" value="Entre!">
            </form>
        </div>

    </body>
</html>

