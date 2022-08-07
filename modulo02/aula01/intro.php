<?php

include "Aluno.php";
include "Professor.php";
include "Curso.php";

$a1 = new Aluno();
$a1->nome = "Bryan";
$a1->cpf = "123.123.123-12";

$p1 = new Professor();
$p1->nome = 'lucas';
$p1->cpf = '123.987.123-12';
$p1->salario = '5000.00';

echo "<h1>Aluno: {$a1->nome}</h1>";