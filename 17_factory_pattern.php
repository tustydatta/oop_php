<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$db = new database();
$db->setDriver("mysql");
$db->connect("host", "user", "db", "pass"); 

// if(dbtype == "mysql"){
//     //mysql code
// } elseif($dbtype == "sqlite"){
//     //sqlite code
// }

?>