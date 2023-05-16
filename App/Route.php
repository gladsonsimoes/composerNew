<?php
    //selecao do autoload composer.json app
    namespace App;

    class Route{
        public function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
            );

            $routes['sobre_nos'];
        }
        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }

?>