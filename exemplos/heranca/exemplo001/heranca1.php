<?php
//  1. Criar classe Animal com 3 atributos, método construtor e no mínimo 2 métodos;
// 2. Criar classe Cachorro, com no mínimo 1 atributo diferente e 1 método diferente;
// 3. Criar classe Peixe, com no mínimo 1 atributo diferente e 1 método diferente;
// 4. Criar um arquivo index.php, onde serão criados os objetos

class Animal{
  protected $peso;
  protected $ambiente;
  protected $cor;
  protected $nomeClasse;

  public function __construct($peso, $cor)
  {
    $this->peso = $peso;
    $this->cor = $cor;
    $this->nomeClasse = get_class($this);
  }

  public function dormir(){
    echo "O animal com peso de {$this->peso} kg está dormindo!!<br>";
  }
  public function cacar(){
    echo "O animal de cor {$this->cor} está caçando!";
  }
}

class Cachorro extends Animal{
  private $raca;

  public function __construct($peso, $cor,$raca)
  {
    parent::__construct($peso, $cor); // metodos construtores de classes mães também usam o ::
    $this->raca = $raca; 
  }

  public function uivar(){
    echo "O animal {$this->nomeClasse}, pesa {$this->peso} kg e tem a cor {$this->cor} está uivando!";
  }
}

class Peixe extends Animal{
  private $tipoMar;

  public function __construct($peso, $cor, $tipoMar)
  {
    parent::__construct($peso, $cor);
    $this->tipoMar = $tipoMar;
  }

  public function nadar(){
    echo "O animal {$this->nomeClasse} de peso {$this->peso} kg está nadando no mar {$this->tipoMar}";
  }
}