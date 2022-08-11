<?php
// criando a classe Escola:

class Escola{
  // atributos/propiedades:
  public $nomeAluno;
  public $quadra;
  public $serie;

  //criando uma função construtora que inicia os atributos com valores dinâmicos
  function __construct($nomeAluno, $quadra, $serie)
  {
    // referencio as variáveis criadas no parâmetro da função construtora com as variáveis criadas fora
    $this->nomeAluno = $nomeAluno;
    $this->quadra= $quadra;
    $this->serie = $serie;
  }
  

}
// instaciando a classe Escola e passando os valores como parâmetro para a função construtora
$receber = new Escola("Pedro","quadra de vôlei",9);
echo "O aluno {$receber->nomeAluno} está na {$receber->quadra} e cursa o {$receber->serie} ano!";