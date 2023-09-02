<?php

class singleton{

    private static $instance;
    public function __construct(){
        if(!self::$instance){
            self::$instance == $this;
            echo "Create new One. <br/>";
            return self::$instance;
        }else{
            echo "Old one. <br>";
            return self::$instance;
        }
    }
}

?>