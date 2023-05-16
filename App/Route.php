<?php
//selecao do autoload composer.json app
namespace App;

class Route
{
    public function __construct()
    {
        $this->initRoutes();

        //funcao run e instanciando o getUrl no $url
        $this->run($this->getUrl());
    }

    private $routes;

    public function getRoutes()
    {
        return $this->routes;
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }


    public function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

    //funcao do que o usuario vai passar na url    
    public function run($url){
        echo $url;
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>