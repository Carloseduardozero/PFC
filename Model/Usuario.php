<?php


    Class Usuario{
        
        private        $Nome;
        private     $Usuario;
        private       $Email;
        private       $Senha;


        //Metodos acessores


            //Metodos Getters
            function getNome() {
                return $this->Nome;
            }

            function getUsuario() {
                return $this->Usuario;
            }

            function getEmail() {
                return $this->Email;
            }

            function getSenha() {
                return $this->Senha;
            }



            //Metodos Setters
            function setNome($Nome) {
                $this->Nome = $Nome;
            }

            function setUsuario($Usuario) {
                $this->Usuario = $Usuario;
            }

            function setEmail($Email) {
                $this->Email = $Email;
            }


            function setSenha($Senha) {
                $this->Senha = $Senha;
            }

    }
