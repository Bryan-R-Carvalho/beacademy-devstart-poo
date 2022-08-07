<?php
include "Produto.php";

ini_set("display_errors", 1);


$p1 = new Produto();
$p1->setNome("Tenis para corrida");
$p1->setValor(200);

$p2 = new Produto();
$p2->setNome("calça Jeans");
$p2->setValor(300);

echo $p2->getNome();
echo '<br>';
echo $p2->getValor();