<?php

ini_set("display_errors", 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include "Validar.php";

$c1 = new Cliente("bryan","email@email.com" , "123456", "12312312312", "01/01/2000");

$cpf = "12312312312";

Validar::validarCpf($cpf);

$g1 = new Gestor ("joao","joao@email.com" , "123123", "123.123.123-12", 6000);

$gg1 = new GestorGeral ("rafael@email.com" , "1q2w3e", 9000);

var_dump ($c1);
var_dump ($g1);
var_dump ($gg1);