<?php 
/*
Crie uma classe Televisao e uma classe ControleRemoto que pode controlar o volume e
trocar os canais da televisão. O controle de volume permite:
 aumentar ou diminuir a potência do volume de som em uma unidade de cada vez;
 aumentar e diminuir o número do canal em uma unidade
 trocar para um canal indicado;
 consultar o valor do volume de som e o canal selecionado
*/


class Televisao{
    // variáveis para volume
    protected static $volumeAtual = 5;
    protected static $aumentarVolume;
    protected static $diminuirVolume;
    
    // variáveis para canal
    protected static $canalAtual;
    protected static $aumentarCanal;
    protected static $diminuirCanal;
}


class ControleRemoto extends Televisao{
  protected static $resultadoVolume;


  public static function aumentarV(){

    
    if(parent::$aumentarVolume >= parent::$volumeAtual){
      echo "<br>A televisão está no seu volume máximo!";
    }
    else{
      echo "<br>Você aumentou o volume da televisão! O volume atual é: ". parent::$aumentarVolume += 1;
    }
    
  }
  


  public static function diminuirV(){
    
    if(parent::$aumentarVolume == 0 ){
      echo "<br>Você não pode diminuir!";
    }
    else{
      echo "<br>Você diminuiu o volume da televisão! O volume atual é: ".parent::$aumentarVolume -= 1;
    }
  }

}