<?php

class late_static_binding{
    public static function framework(){
        echo "CakePhp is a framework.<br/>";
    }

    public function getFramework(){
        self::framework();
    }

    public static function superClass(){
        echo static::getClass()."<br/>";
    }

    public static function getClass(){
        return __CLASS__;
    }
}

?>