<?php
    //selecao do autoload composer.json app
    namespace App;

    class Route{
        public function getUrl(){
            return $_SERVER['REQUEST_URI'];
        }
    }

?>