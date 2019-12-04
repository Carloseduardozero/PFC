<?php


//Abertura do da sessão
session_start();


//Importação de outros arquivos, necessarios para ultilizar outros codigos
require_once "../Model/conexao.php";
require_once "../Model/Usuario.php";


//Criação de objetos
$con =   getConexao();
$user = new Usuario();


    //Requisitando as informações do formulario
    $nome =             filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $usuario =       filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $email =           filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha1 =         filter_input(INPUT_POST, 'senha1', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha2 =         filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_SPECIAL_CHARS);
  //$Imagem =                                                 "imagens\perfil\user.png";

  if($senha1 == $senha2){

    //Criação das sessões e atribuições dos sus respectivos valores
    $_SESSION['nome'] =                   $nome;
    $_SESSION['usuario'] =             $usuario;
    $_SESSION['email'] =                 $email;
    $_SESSION['senha'] =                $senha1;
    //$_SESSION['imagem'] =             $Imagem;


    //Envio das informações pelo objeto
    $user->          setNome($_SESSION['nome']);
    $user->    setUsuario($_SESSION['usuario']);
    $user->        setEmail($_SESSION['email']);
    $user->        setSenha($_SESSION['senha']);

    
    //resgate das informações pelo objeto    
    $Nome =                    $user->getNome();
    $Usuario =              $user->getUsuario();
    $Email =                  $user->getEmail();
    $Senha =                  $user->getSenha();


    //Query reponsavel por preparar o codigo que insere as informações no banco
    $query = $con->prepare("INSERT INTO usuarios
    (nome,usuario,email,senha)VALUES (:nome,:usuario,:email,:senha)");


    $query->           bindValue(":nome",$Nome);
    $query->     bindValue(":usuario",$Usuario);
    $query->         bindValue(":email",$Email);
    $query->         bindValue(":senha",$Senha);
  //$query-> bindValue(":imagem",$Imagem);

    $query->execute();

    header("location: ../View/feed.php");
  }else{
    $_SESSION['msg'] = "As senhas não são as mesmas";
    
    header("location: ../View/Cadastro.php");
  }
