<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$java = new language1();
$java->setCat("oop");
$java->setFramework("spring");

$php = clone $java;
$php->setFramework("CodeIgniter");

echo $java->getCat()."<br/>";
echo $java->getFramework()."<br/>";

echo $php->getCat()."<br/>";
echo $php->getFramework()."<br/>";

?>