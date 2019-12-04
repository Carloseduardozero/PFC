<?php

require_once "../Model/conexao.php";
require_once "../Model/Usuario.php";


$con =   getConexao();
$user = new Usuario();


    $Nome =        filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $Email =      filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $Informacoes = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_SPECIAL_CHARS);
    $Cpf =          filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
    $Jogo =       filter_input(INPUT_POST, 'Jogos', FILTER_SANITIZE_SPECIAL_CHARS);
    $Imagem =                                            "imagens\perfil\user.png";

    //Caso as informações sejam default será atribuido um novo valor
    if($Informacoes == ""){
      $Informacoes = "Nenhuma informação...";
    }

    //Criação da sessão com os valores informados pelo usuario
    session_start();

    $_SESSION['nome'] =               $Nome;
    $_SESSION['email'] =             $Email;
    $_SESSION['informacoes'] = $Informacoes;
    $_SESSION['cpf'] =                 $Cpf;
    $_SESSION['jogo'] =               $Jogo;
    $_SESSION['imagem'] =           $Imagem;

    /*Criação dos cookies, o que está entre aspas é o nome do cookie
    setcookie('nome', $Nome,               time()+3600);
    setcookie("email", $Email,             time()+3600);
    setcookie("informacoes", $Informacoes, time()+3600);
    setcookie("cpf", $Cpf,                 time()+3600);
    setcookie("jogo", $Jogo,               time()+3600);
    */


    //Envio das informações pelo objeto
    $user->               setNome($Nome);
    $user->                 setCpf($Cpf);
    $user->             setEmail($Email);
    $user-> setInformacoes($Informacoes);
    $user->               setJogo($Jogo);

    //resgate das informações pelo objeto    
    $Nome =               $user->getNome();
    $Cpf =                 $user->getCpf();
    $Email =             $user->getEmail();
    $Informacoes = $user->getInformacoes();
    $Jogo =               $user->getJogo();

    $query = $con->prepare("INSERT INTO usuarios(email,cpf,nome,informacoes,jogofavorito,diretorio)
     VALUES (:email,:cpf,:nome,:informacoes,:jogo,:imagem)");


    $query-> bindValue(":email",$Email);
    $query-> bindValue(":cpf",$Cpf);
    $query-> bindValue(":nome",$Nome);
    $query-> bindValue(":informacoes",$Informacoes);
    $query-> bindValue(":jogo",$Jogo);
    $query-> bindValue(":imagem",$Imagem);

    $query->execute();


    header("location: ../View/feed.php");