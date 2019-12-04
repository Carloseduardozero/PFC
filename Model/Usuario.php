<?php


Class Usuario{
  private        $Nome;
  private       $Email;
  private         $Cpf;
  private $Informacoes;
  private     $JogoFav;

  function getNome() {
      return $this->Nome;
  }

  function getEmail() {
      return $this->Email;
  }

  function getCpf() {
      return $this->Cpf;
  }

  function getInformacoes() {
      return $this->Informacoes;
  }

  function setNome($Nome) {
      $this->Nome = $Nome;
  }

  function setEmail($Email) {
      $this->Email = $Email;
  }

  function setCpf($Cpf) {
      $this->Cpf = $Cpf;
  }

  function setInformacoes($Informacoes) {
      $this->Informacoes = $Informacoes;
  }


  function getJogo() {
      return $this->JogoFav;
  }

  function setJogo($jogo) {
      $this->JogoFav = $jogo;
  }

}
