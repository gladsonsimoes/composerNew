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
            'route' => '/', //route vai ser a url quando usuario vai digitar 
            'controller' => 'IndexController', //controller está acessando o indexcontroller
            'action' => 'index' //action esta chamando as funcoes do IndexController.php
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos', 
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

    //funcao do que o usuario vai passar na url    
    public function run($url){
        echo $url;
        foreach($this->getRoutes() as $key => $route){ 
            if($url == $route['route']){ //vai acessar a url de route
                $class = "App\\Controllers\\".$route['controller']; //classe controladora , chamando o array controller de $route atraves do array route

                $controller = new $class; //instanciando a classe
                $action = $route['action']; //variavel action que chama o array da action
                $controller->$action(); //executando 
            }
        }
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>