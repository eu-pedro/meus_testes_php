<?php
require ("Televisao.php");

/*
Crie uma classe Televisao e uma classe ControleRemoto que pode controlar o volume e
trocar os canais da televisão. O controle de volume permite:
 aumentar ou diminuir a potência do volume de som em uma unidade de cada vez;
 aumentar e diminuir o número do canal em uma unidade
 trocar para um canal indicado;
 consultar o valor do volume de som e o canal selecionado
*/


$t1 = new Televisao();


$c1 = new ControleRemoto();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> diminuirV();
$c1 -> diminuirV();
$c1 -> diminuirV();
$c1 -> diminuirV();
$c1 -> diminuirV();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> aumentarV();
$c1 -> aumentarV();
