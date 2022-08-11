<?php 
require ("heranca1.php");

// instanciando a classe Animal
$a1 = new Animal(60, "azul");
$a1->dormir();
$a1->cacar();

echo "<hr>";

// instanciando a classe Cachorro
$c1 = new Cachorro(55,"marrom","pitbull");
$c1->uivar();

echo "<hr>";
// instanciando a classe Peixe
$p1 = new Peixe(5, "cinza", "doce");
$p1->nadar();