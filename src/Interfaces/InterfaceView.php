<?php
namespace Src\Interfaces;
#a interfaceView vai obrigar q o sistema implemente esses metodos por exemplo o ControllerHome q está usando a interface
#se logo a baixo de renderlayout tiver public function teste, em controllerhome tem q ter tb, é uma segunraça
interface  InterfaceView{

    public function setDir($Dir);
    public function setTitle($Title);
    public function setDescription($Description);
    public function setKeywords($Keywords);
    public function renderLayout();
}