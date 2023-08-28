<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
}); 

$cal = new Calculation;
echo "Result is: " . $cal->getValue(3, 5)->getResult();

?>