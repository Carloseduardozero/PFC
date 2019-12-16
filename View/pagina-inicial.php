<?php

session_start();


if(isset($_SESSION["msg"])){
  echo $_SESSION["msg"];
}



if(!isset($_SESSION['senha'])){
  header("location: ../View/index.php");
}

$extensoes_padrao = array("xlsx","xls","csv");

  if(isset($_FILES['file'])){
    $extensao = explode(".", $_FILES['file']['name'])[1];


    if(in_array($extensao, $extensoes_padrao)){
      
      $diretorio = "../arquivos/planilhas-descidas/";
      $novo_nome = md5(time()).".".$extensao;
      $planilha = $diretorio.$novo_nome;

      
      move_uploaded_file($_FILES['file']['tmp_name'], $diretorio.$novo_nome);
    
    }else{
      header("location: pagina-inicial.php");
      $_SESSION['msg'] = "Formato invalido";
    }
  }

?>

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