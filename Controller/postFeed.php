<?php
session_start();

include_once '../Model/conexao.php';
$con = getConexao();

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
$arquivo = $_FILES['arquivo'];



    if (!empty(($comentario) && ($arquivo))) {

        $extensao = explode(".", $_FILES['arquivo']['name'])[1];
        //Receber os dados do formulário
        $nome_arquivo = $_FILES['arquivo']['name'];
        //var_dump($_FILES['arquivo']);
        //Inserir no BD

        

        //Verificar se os dados foram inseridos com sucesso

            //Recuperar último ID inserido no banco de dados
            $ultimo_id = $con->lastInsertId();

            //Diretório onde o arquivo vai ser salvo
            //$diretorio = "../View/posts/".$ultimo_id;

            //Criar a pasta de foto 
            //mkdir($diretorio, 0755);
            $diretorio = "../View/imagens/arquivos/";
            $novo_nome = md5(time()).".".$extensao;
            $arquivo = $diretorio.$novo_nome;
            
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);


            $insert_msg = $con->prepare("INSERT INTO post (comentario, arquivo) VALUES (:comentario, :arquivo)");
            $insert_msg->bindValue(':comentario', $comentario);
            $insert_msg->bindValue(':arquivo', $arquivo);
            $insert_msg->execute();
            header("Location: ../View/feed.php");
            /*if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nome_arquivo)){
                $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload do arquivo realizado com sucesso</p>";
                header("Location: ../View/feed.php");
            }else{
                $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload do arquivo</span></p>";
                header("Location: ../View/feed.php");
            }        
        } else {
            $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
            header("Location: ../View/feed.php");
        }
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: ../View/feed.php");
    }*/}