<?php

class Funcionario{
  public $nome;
  public $idade; 
  public $id;
  
  function __construct($nome, $idade,$id){
  $this->nome = $nome;
  $this->idade = $idade;
  $this->id = $id;
    
  }
  // atributo = variáveis
  // função = método
  function Falar($texto){
    
    echo $texto;
  }

}

//VARIÁVEIS RECEBENDO VALOR
// $pessoa = new Funcionario;
// echo "{$pessoa->nome}";

// COM FUNÇÃO CONSTRUTORA
$receber = new Funcionario("Pedro", 19, 01);

echo "Olá, meu nome é{$receber->nome}<br>";


echo "tenho {$receber->idade} anos de idade <br>";


echo "meu id de funcionário é: {$receber->id}<hr>";


// acessando o método
$receber->Falar("O funcionário {$receber->nome} tem {$receber->idade} anos e seu código id é {$receber->id}");



