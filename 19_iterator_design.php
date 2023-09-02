<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$blogPost = getAllPost();
for($i = 0; $i < count($posts); $i++){
    $title = getTitle($post[$i]);
    echo $title;
    $author = getauthor($post[$i]);
    $content = getcontent($post[$i]);
    echo $content;
    $comments = getComments($post[$i]);
    
}

?>