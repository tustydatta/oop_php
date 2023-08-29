<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$java = new Language();
$java->setCat("OOP");
$java->setFramework("Spring");
echo $java->getCat()."<br/>";
echo $java->getFramework()."<br/>";

$php = clone $java;
$php->setCat("structural");
$php->setFramework("CodeIgniter");

echo $java->getCat()."<br/>";
echo $java->getFramework()."<br/>";

echo $php->getCat()."<br/>";
echo $php->getFramework()."<br/>";

?>