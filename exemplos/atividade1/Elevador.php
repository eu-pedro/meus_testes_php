<?php
/*
Crie uma classe Elevador para armazenar as informações de um elevador de prédio. A classe deve armazenar o andar atual (térreo = 0), total de andares no prédio (desconsiderando o térreo), capacidade do elevador e quantas pessoas estão presentes nele. A classe deve também disponibilizar os seguintes métodos:
  •	Inicializar: que deve receber como parâmetros a capacidade do elevador e o total de andares no prédio (os elevadores sempre começam no térreo e vazio);
  •	Entrar: para acrescentar uma pessoa no elevador (só deve acrescentar se ainda houver espaço);
  •	Sair: para remover uma pessoa do elevador (só deve remover se houver alguém dentro dele);
  •	Subir: para subir um andar (não deve subir se já estiver no último andar);
  •	Descer: para descer um andar (não deve descer se já estiver no térreo);
  •	Obs.: Encapsular todos os atributos da classe (caso precise, crie os métodos set e get). Criem um arquivo index.php pra instanciar os objeto e um arquivo para armazenar a classe.
*/

class Elevador{
  private $andarAtual;
  private $totalAndares;
  private $capacidadeElevador;
  private $totalPessoas;
  private $resultado = 0;

  public function __construct($capacidadeElevador, $totalAndares, $totalPessoas)
  {
    $this->capacidadeElevador = $capacidadeElevador;
    $this->totalAndares = $totalAndares;
    $this->totalPessoas = $totalPessoas;
  }



  public function inicializar($capacidadeElevador, $totalAndares){
    echo "O elevador está iniciando! O elevador tem capacidade para {$this->capacidadeElevador} pessoas e possui {$this->totalAndares} andares!";
  }
  public function entrar(){
    if($totalPessoas > 5){
      $this->resultado++;
    }
  }
  

}