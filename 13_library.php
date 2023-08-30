<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$arr = array("HTML", "CSS", "PHP", "JavaScript", "JAVA");
$ai = new ArrayIterator($arr);

echo $ai->current()."<br/>";
$ai->next();
echo $ai->current()."<br/>";

// foreach
foreach ($ai as $value){
    echo $value."<br>";
}

$limit = new LimitIterator($ai, 0, 2);
foreach ($limit as $value){
    echo $value."<br>";
}

$ci = new CachingIterator($ai);
foreach ($ci as $value){
    echo $value;
    if($ci->hasNext()){
        echo ", ";
    }
}

?>