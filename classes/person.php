<?php

class person{
    public $name = "Arif";
    public $age = "18";
    public $skill = "Blogging";

    private $email = "arif@gmail.com";
    protected $password = "111";

    public function iteratorInner(){
        echo "Inside Class <br>";
        foreach($this as $key => $value){
            echo "<pre>";
            echo "$key => $value";
            echo "</pre>";
        }
    }
}


?>