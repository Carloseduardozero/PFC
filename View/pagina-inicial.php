<?php

session_start();

if(!isset($_SESSION['senha'])){
  header("location: ../View/index.php");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pagina inicial</title>
  
  <link rel="stylesheet" href="./estilo/style.css">

</head>
<body>
  <div class="arquivo">
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="file" id="file">
        <input type="submit" value="Enviar" id="enviar">
    </form>
  </div>
</body>
</html>