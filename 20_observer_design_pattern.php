<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$obj = new observable();
$sk = new skype();
$gt = new gtalk();
$s = new stdClass();

$obj->register($sk);
$obj->register($gt);
$obj->register($s);
$obj->stateChange();

?>