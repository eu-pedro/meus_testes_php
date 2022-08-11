<?php 
include("heranca.php");
// instanciando o objeto
$v1 = new Veiculo("Fiat", "Argo");
//chamando os métodos
//$v1->ligar();
echo "<br>";
//$v1->desligar();
echo "<br>";
$v1->estaLigado();
echo "<br>";


echo "<hr>";
// class Carro
$c1 = new Carro("Ford","Fiesta");
//$c1->ligar();
echo "<br>";
//$c1->estaLigado();
echo "<br>";
$c1->ligarParaBrisa();