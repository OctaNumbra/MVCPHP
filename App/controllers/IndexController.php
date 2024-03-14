<?php

namespace App\controllers;

class IndexController
{
    public function index()
    {
        echo 'controller: IndexController - acao: Index()';
    }
}

$dados = array('dado1', 'dado2', 'dado3', 'dado4');
require_once "../App/views/index.phtml";
?>