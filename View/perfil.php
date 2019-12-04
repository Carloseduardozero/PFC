<?php
require_once "../Model/conexao.php";


session_start();

  if(!isset($_SESSION['cpf'])){
    header("location: index.php");
  }
  
$imagem = $_SESSION["imagem"];
$cpf =       $_SESSION['cpf'];


$con = getConexao();

$extensoes_padrao = array("png","jpg","jpeg","gif");

  if(isset($_FILES['file'])){
    $extensao = explode(".", $_FILES['file']['name'])[1];


    if(in_array($extensao, $extensoes_padrao)){
      $diretorio = "./imagens/perfil/";
      $novo_nome = md5(time()).".".$extensao;
      $imagem = $diretorio.$novo_nome;

      move_uploaded_file($_FILES['file']['tmp_name'], $diretorio.$novo_nome);


    $query = $con->prepare("UPDATE usuarios SET diretorio=:imagem WHERE cpf = :cpf");
    $query-> bindValue(":imagem",$imagem);
    $query-> bindValue(":cpf",$cpf);
    $query->execute();

    $_SESSION["imagem"] = $imagem;
    }
  }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./estilo/style.css">
</head>
<body>


  <div class="imagem-perfil">
  
  <form action="" enctype="multipart/form-data" method="post">
      <img src="<?php echo $imagem?>">
        <input type="file" name="file" id="file">
      <input type="submit" value="Enviar" id="enviar">
      </form>
  </div>
  
  <div class="perfil">
    
      <p class="title">Pricipal</p>  
      <p>Informações principais</p>
  
    <label for="nome">Nome:</label>
    <input type="text" disabled placeholder="Nome" id="nome">
    <label for="email">Email:</label>
    <input type="text" disabled placeholder="Email" id="email">
  </div>

  <p class="title">Configurações Gerais</p>
  <p class="p1">Gerencie os detalhes da conta que você compartilhou conosco</p>

  <div class="informacoes">
    <label for="cpf">cpf:</label>
    <input type="text" disabled placeholder="cpf" id="cpf">
    <label for="email">Email:</label>
    <input type="text" disabled placeholder="Email" id="email">
    <select name="jogos" id="jogos">
      <option value="Jogo preferivel">Jogo preferivel</option>
      <option value="Jogo 1">Jogo 1</option>
      <option value="Jogo 2">Jogo 2</option>
      <option value="Jogo 3">Jogo 3</option>
      <option value="Jogo 4">Jogo 4</option>
    </select>

    <label for="sobre">Um pouco sobre você:</label>
    <textarea name="sobre" id="sobre" cols="30" rows="10"></textarea>
  </div>
  
</body>
</html>