<?php
namespace Src\Classes;

class ClassRender{

    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir() { return $this->Dir; }
    public function setDir($Dir) { $this->Dir = $Dir; }
    public function getTitle() { return $this->Title; }
    public function setTitle($Title) { $this->Title = $Title; }
    public function getDescription() { return $this->Description; }
    public function setDescription($Description) { $this->Description = $Description; }
    public function getKeywords() { return $this->Keywords; }
    public function setKeywords($Keywords) { $this->Keywords = $Keywords; }





    #metodo responsavel por renderizar(é o processo final feito) todos o layout
    public function renderLayout(){

        include_once(DIRREQ."app/view/Layout.php");
    }

    #adiciona carateristicas especificas no head
    public function addHead(){

        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }

    #adiciona carateristicas especificas no head
    public function addHeader(){

        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Header.php");
        }
    }
    #adiciona caracteristicas especificas no main
    public function addMain(){

        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }
    #adiciona caracteristicas especificas no Footer
    public function addFooter(){

        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php");
        }
    }
}