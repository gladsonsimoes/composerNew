<?php
  namespace App\Controllers;

  class IndexController{
    public function index(){
        $dados = array('amora', 'pera', 'manga'); //dados do index
        $this->render("index" , $dados); //funcao render que irá passar o view e os dados 
    }

    public function  sobreNos(){
        $dados = array('bala', 'caramelo', 'jujuba'); 
        $this->render("sobreNos" , $dados);
    }


    //em vez de escrever require_once varias vezes estamos usando uma funcao render
    public function  render($view, $dados){
        require_once("../App/Views/index/".$view.".phtml");
    }
  }

?>