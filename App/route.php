<?php

namespace app;

class Route
{
    private $routes;
    private $rota_solicitada;

    public function setUrlParam(){
        $this->rota_solicitada = $this->getUrl1();
    }

    public function __construct()
    {
        $this->initRoutes();
        $this->setUrlParam();
        $this->runRoute();
    }

    public function initRoutes()
    {
        $this->routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );
    }
    public function getUrl1()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function runRoute(){
        foreach($this->routes as $nomeRota=>$rota){
            if($this->rota_solicitada == $rota['route']){
                $class = "App\\controllers\\".$rota['controller'];
                $controller = new $class;
                $acao = $rota['action'];
                $controller->$acao();
            }
        }
    }
}
?>