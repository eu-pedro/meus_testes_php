<?php 
require ("Pessoa.php");

$p1 = new Pessoa("Junior", 44, 60);
$p1->relatorio();

echo "<hr>";

$f1 = new Funcionario("Hugo", 82,16, 1212);
$f1->dormir();

echo "<hr>";

$g1 = new Gerente("Flávio", 36, 126, 123);
$g1->mandar();