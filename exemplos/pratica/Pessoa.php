<?php

// criando classe Pessoa
class Pessoa{
  // criando propiedades
  public $nome;
  public $peso;
  public $idade;

  function __construct($nome, $peso, $idade)
  {
    $this->nome = $nome;
    $this->peso = $peso;
    $this->idade = $idade;
  }
  /*
  function getNome(){
    return $this->nome;
  }
  function setNome($valor){
    $this->nome = $valor;
  }
  */

  // método mágico get
  function __get($atributo)
  {
    return $this->atributo;
  }
  function __set($atributo, $value)
  {
    $this->atributo = $atributo
  }

}
$pessoa1 = new Pessoa("Pedro", 76, 18);
// $pessoa1->setNome("Lucas");

echo "{$pessoa1->nome} tem {$pessoa1->peso} kg e {$pessoa1->idade} anos";