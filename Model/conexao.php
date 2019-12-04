<?php

    function getConexao(){
    
        //Variaveis responsaveis por identificar o banco de dados
        $banco = 'mysql:dbname=login;host=localhost';
        $username= 'root';
        $password = ''; 

        try {
            $pdo = new PDO($banco,$username,$password);
            
            return $pdo;
        } catch (PDOException $exc) {
            echo $exc->getLine();
        }
}