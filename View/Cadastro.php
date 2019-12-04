<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="cad.css">
        <title>RPG</title>
    </head>
    <body>
    <center>
        <div id="cadastro">
        <form method="POST" action="../Controller/validar-cadastro.php">
            <h1>Cadastro</h1><p></p><br>
            <h4> Nome</h4> <input type="text" name="nome" placeholder="Nick" required=""><p></p>
           <h4> E-mail</h4> <input type="email" name="email" placeholder="@hotmail.com" required="">
           <h4> Informações</h4> <textarea name="info" cols="10" rows="001"></textarea> <p></p>
              Jogo favorito: <select name="Jogos" id="jogo">
                <option value="jogo 1">jogo 1</option>
                <option value="jogo 2">jogo 2</option>
                <option value="jogo 3">jogo 3</option>
                <option value="jogo 4">jogo 4</option>
            </select>
              <p></p>
            <h4>  CPF: </h4> <input type="password" name="cpf" placeholder="000.000.000-00" required=""><p></p>
            <input type="submit" value="Cadastrar">
            <p></p>
        </form>
        <form method="POST" action="../View/index.php">
            <h4> Possui conta? </h4> <input type="submit" value="Entre!">
        </form>
        </div>
    </center>
    </body>
</html>

