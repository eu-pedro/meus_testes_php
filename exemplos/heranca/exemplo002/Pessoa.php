<?php 
/*
  CRIAR UMA CLASSE PESSOA (1 CONSTANTE, METODO CONSTRUTOR)
  CRIAR CLASSE FUNCIONARIO (1 CONSTANTE DIFERENTE, METODO CONSTRUTOR)
  CRIAR CLASSE GERENTE ( 1 CONSTANTE DIFERENTE, METODO CONSTRUTOR)
*/

class Pessoa{
  protected $nome;
  protected $idade;
  protected $peso;
  protected $nomeClasse;
  protected const CARGO = "Ajudante";

  public function __construct($nome, $idade, $peso)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->peso = $peso;
    $this->nomeClasse = get_class($this);
  }


  public function relatorio(){
    echo "O ". self::CARGO ." tem {$this->idade} anos e pesa {$this->peso} kg";
  }
}

class Funcionario extends Pessoa{
  private $salario;
  protected const CARGO = "agente de limpeza";

  public function __construct($nome, $peso, $idade, $salario)
  {
    parent::__construct($nome, $peso, $idade);
    $this->salario = $salario;
  }

  public function dormir(){
    echo "O ". self::CARGO ." de nome {$this->nome} pesa {$this->peso} kg com idade {$this->idade} anos recebe exatamente R$ {$this->salario} reais";
  }
}

class Gerente extends Pessoa{
  private $codGerente;
  protected const CARGO = "Gerente";

  public function __construct($nome, $peso, $idade, $codGerente)
  {
    parent::__construct($nome, $peso, $idade);
    $this->codGerente = $codGerente;
  }

  public function mandar(){
    echo "O ". self::CARGO ." de nome {$this->nome}, tem {$this->idade} anos e pesa {$this->peso} kg e ele está mandando! Seu código de gerente é: {$this->codGerente}";
  }
}

