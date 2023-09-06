<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$post = new post();
$comment = new comment();
$post->filter();
$comment->filter();

if ($BBCodeEnable == false && $EmoticonEnabled == false) {
    $postContent = $post->getContent();
    $commentContent = $comment->getContent();

} elseif($BBCodeEnable == true && $EmoticonEnabled == false){
    $bb = new BBCodePerser($post);
    $postContent = $bb->getContent();

    $bb = new BBCodePerser($comment);
    $comContent = $bb->getContent();

} elseif($BBCodeEnable == false && $EmoticonEnabled == true){
    $em = new Emoticon($post);
    $postContent = $em->getContent();

    $bb = new Emoticon($comment);
    $comContent = $bb->getContent();

}

?>