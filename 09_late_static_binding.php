<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

class phpChild extends late_static_binding{
    public static function getClass(){
        return __CLASS__;
    }
}


$php = new late_static_binding();
$php->getFramework();
$php->superClass();

$childphp = new phpChild();
$childphp->superClass();

?>