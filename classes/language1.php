<?php

class language1{
    private $category;
    private $framework;

    function setCat($a){
        $this->category = $a;
    }

    function getCat(){
        return $this->category;
    }

    function setframework($b){
        $this->framework = $b;
    }

    function getframework(){
        return $this->framework;
    }

    public function __clone(){
        $lang = new Language();
        $lang->setframework($this->framework);
        return $lang;
    }
}

?>