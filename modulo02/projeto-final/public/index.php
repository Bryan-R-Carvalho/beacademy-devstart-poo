<?php
include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ErrorController;

$url = explode ("?",$_SERVER["REQUEST_URI"])[0];

function createRoute(string $controllerName, string $methodName) {
  return [
    "controller" => $controllerName,
    "method" => $methodName,
  ];
}

$routes = [
  "/" => createRoute(IndexController::class,"indexAction"), 
  "/produtos"=>createRoute(ProdutosController::class,"listAction"),
  "/produtos/novo"=>createRoute(ProdutosController::class,"addAction"),
];

if (false === isset($routes[$url])) {
 (new ErrorController())->notFoundAction();
exit;

}
$controllerName= $routes[$url]["controller"];
$methodName= $routes[$url]["method"];
(new $controllerName())-> $methodName();