<?php

ini_set('display_errors', 1);

include "Aluno.php";
include "Curso.php";
include "Professor.php";

$p1 = new Professor();
$p1->nome = "Alessandro";
$p1 ->cpf ="123.123.123-12";
$p1-> salario = 1000 ;  

$c1 = new Curso();
$c1->disciplina = "Programação";
$c1-> carga_horaria = '300';
$c1-> custo = '2000.00';


$p1-> cpf ="1111111111";

var_dump($p1);