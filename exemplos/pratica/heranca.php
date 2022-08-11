<?php 

class Veiculo{
  private $marca;
  private $modelo;
  private $ligado = false;
  protected $nomeClasse;


  public function __construct($marca,$modelo)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->nomeClasse = get_class($this);
  }
  // método para o veículo ligar
  public function ligar(){
    $this->ligado = true;
    echo "O veículo está ligado!";
  }
  // método para o veículo desligar
  public function desligar(){
    $this->ligado = false;
    echo "O {$this->nomeClasse} está desligado";
  }

  // método para "provar" se o veículo está ligado ou desligado
  public function estaLigado(){
    echo ($this->ligado) ? "O {$this->nomeClasse} está ligado!" : "O {$this->nomeClasse} está desligado";
   
    /*
    Uma forma de fazer
    if($this->ligado){
      $this->ligar();
    }
    else{
      $this->desligar();
    }
    */
  }
}
// herança = "extends"
class Carro extends Veiculo{
  // agora a classe Carro herdou todas as propiedades e métodos da classe Veiculo
  // OBS = Quando você quiser usar uma variável de outra classe, coloque-a como "protected"

  public function ligarParaBrisa(){
    // $nomeClasse está como protected
    echo "O {$this->nomeClasse} ligou o para-brisa!";
  }
}
