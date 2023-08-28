<?php

spl_autoload_register(function($class_name){
    include "classes/". $class_name.".php";
});

$person = new person;
foreach ($person as $key => $value) {
    echo "<pre>";
    echo "$key=> $value";
    echo "</pre>";
}
$person->iteratorInner();

?>