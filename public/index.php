<?php
require_once "../vendor/autoload.php";
require_once "../App/views/index.phtml";

$route = new App\Route;
echo 'ponto de entrada';
echo '<hr>';
print_r($route->getUrl1());
?>