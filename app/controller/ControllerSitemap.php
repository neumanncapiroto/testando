<?php
namespace App\Controller; #aqui o Controller está sendo o NameSpace do dispatch function addController()

class ControllerSitemap{
    public function testeMetodo($par1, $par2, $par3){
        echo "o parâmetro 1 é <strong>{$par1}</strong>,o parâmetro 2 é <strong>{$par2}</strong>,o parâmetro 3 é <strong>{$par3}</strong>";
    }


    public function teste2(){
        echo "teste 2";
    }
}