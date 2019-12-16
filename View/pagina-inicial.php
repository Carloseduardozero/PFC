<?php

session_start();


if(!isset($_SESSION['senha'])){
  header("location: ../View/index.php");
}


if(isset($_SESSION["msg"])){
  
  if($_SESSION["msg"] != ""){
    echo $_SESSION["msg"];
    $_SESSION["msg"] = "";
  }

}



$extensoes_padrao = array("xlsx","xls","csv");

  if(isset($_FILES['file'])){
    $extensao = explode(".", $_FILES['file']['name'])[1];


    if(in_array($extensao, $extensoes_padrao)){
      
      $diretorio = "../arquivos/planilhas-descidas/";
      $novo_nome = md5(time()).".".$extensao;
      $planilha = $diretorio.$novo_nome;
      $_SESSION['msg'] = "";
      
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
<input type="checkbox" id="check">
        <label id="icone" for="check"><img src="../img/icone.png"></label>
                    <nav>
                        <ul>         
                        <li><a href="inicio.php"><div class="link"><img src="../img/hom.png" width="60px" height="45px">Inicio</div></a></li>
                        <li><a href="materiais.php"><div class="link"><img src="../img/mat.png" width="38px" height="38px">  Materiais e Normas</div></a></li>
                        <li><a href="documentos.php"><div class="link"><img src="../img/doc.png" width="38px" height="38px">  Meus Documentos</div></a></li>
                        <li><a href="documentox.php"><div class="link"><img src="../img/reverse.png" width="38px" height="38px">  Importar e Exportar</div></a></li>
                        <li><a href="lixeira.php"><div class="link"><img src="../img/lix.png" width="38px" height="38px">  Lixeira</div></a></li>
                        <li> <a href="index.php"><div class="link"><img src="../img/out.png" width="38px" height="38px">  Sair</div></a></li>
                        </ul>
                    </nav>
    <center>
        <div class="barra">
            <img src="./../img/DZ.png" width="250px" height="70px">
        </div>
    </center>
  <div class="fundao">
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="file" id="file">
        <input type="submit" value="Enviar" id="enviar">
    </form>
  </div>
</body>
</html>