<?php
namespace Src\Traits;

trait TraitUrlParser{

    #divide a url em um array
    public function parseUrl(){
        return explode("/",rtrim($_GET['url']),FILTER_SANITIZE_URL); //aqui to usando o explode pra transformar a minha barra(/) em um array
        // rtrim para tirar os espaços vazios e o $_GET['url'] ta sendo pego do htaccess
        //FILTER_SANITIZE_URL ta sendo usado pq ele tem na htaccess tb, o nome n está igual mais é isso
    }
}