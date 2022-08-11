<?php

// SINTAXE BÁSICA: 

// criando a classe Cachorro:

class Cachorro{
  // atributos: 
  public $corDoPelo;
  public $raca;
  public $peso;



}
// instanciando o objeto
$receber = new Cachorro;

$receber-> corDoPelo = "marrom";
$receber-> raca = "pitbull";
$receber-> peso = 55;
echo "Meu cachorro tem a cor {$receber->corDoPelo}, de raça {$receber->raca} e pesa {$receber->peso}kg";