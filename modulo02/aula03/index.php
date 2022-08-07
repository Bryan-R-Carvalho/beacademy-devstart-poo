<?php
include "Produto.php";
include"Categoria.php";

ini_set("display_errors", 1);

$c1 = new Categoria("Roupas","Roupas Unissex");
$c2 = new Categoria("Roupas de Banho", "Toalhas, toalhas pra rosto, etc");
$c3 = new Categoria("Calçados","Calçados em geral");


$p1 = new Produto("Tenis" , 300, $c3);
$p1->setDescricao("Tenis para corrida profissional");

$p2 = new Produto("Saia Jeans" , 100, $c1);

$p3 = new Produto("Calça Branca" , 282.43, $c1);

var_dump ($p1);
var_dump ($p2);
var_dump ($p3);