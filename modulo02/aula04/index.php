<?php

ini_set("display_errors", 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente("bryan","email@email.com" , "123456", "123.123.123-12", "01/01/2000");

$g1 = new Gestor ("joao","joao@email.com" , "123123", "123.123.123-12", 6000);

$gg1 = new GestorGeral ("marcelo", "email@hotmail.com", "123123","123.123.123-12", 6000, 300);
 
var_dump ($c1);
var_dump ($g1);
var_dump ($gg1);