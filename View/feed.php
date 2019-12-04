<?php 

session_start();
    
    $imagem = $_SESSION["imagem"];
  
  
        if(!isset($_SESSION['senha'])){
            header("location: index.php");
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./estilo/est.css">
        <title>Feed</title>
    </head>
    <body class="fundo" background="./imagens/fundo.jpg">
        <header class="perfilMovel"><br>
            <img src="<?php echo $imagem ?>"><br><br><br>
            <a href="perfil.php">Perfil</a><br><br>
            <a href="">Configurações</a><br><br>
            <a href="index.php">Sair</a><br><br>
        </header>

        <div class="feed1">
            <h2 class="fonteFeed">O que deseja postar?</h2>
            <form method="POST" action="../Controller/postFeed.php" enctype="multipart/form-data">
                <input type="text" width="320" height="240" name="comentario" max="1024" required>
                <input type="file" name="arquivo">
                <input type="submit" value="Postar">    
            </form>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>
