<?php
session_start();


require_once "../Model/conexao.php";
require_once "../Model/Usuario.php";


$con =   getConexao();
$user = new Usuario();

$Login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf =     filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);

$user->  setNome($Login);
$user->     setCpf($cpf);

$login = $user->getNome();
$cpf =    $user->getCpf();


  $query = $con->prepare("SELECT * FROM usuarios WHERE nome = :nome
  OR email = :email");
  
  
  $query->bindValue(":nome", $login);
  $query->bindValue(":email", $login);

  $query->execute();
  
        if($query->rowCount() != 0){


          $query = $con->prepare("SELECT * FROM usuarios WHERE cpf = :cpf");
          $query->bindValue(":cpf", $cpf);
          $query->execute();
          
        }if($query->rowCount() != 0){
            //Manipulação de informações que foram retirados do banco
            foreach($query->fetchAll() as $valor){
          

            $_SESSION['nome'] =               $valor['nome'];
            $_SESSION['email'] =             $valor['email'];
            $_SESSION['informacoes'] = $valor['informacoes'];
            $_SESSION['cpf'] =                 $valor['cpf'];
            $_SESSION['jogo'] =       $valor['jogofavorito'];
            $_SESSION["imagem"] =        $valor["diretorio"];
            
          }

            header("location: ../View/feed.php");
        }else{

    header("location: ../View/index.php");
}
