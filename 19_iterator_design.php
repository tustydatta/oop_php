<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$blogPost = getAllPost();
// for($i=0; $i<count($posts); $i++){
//     $title = getTitle($post[$i]);
//     echo $title;
//     $author = getauthor($post[$i]);
//     $content = getcontent($post[$i]);
//     echo $content;
//     $comments = getComments($post[$i]);
//     for($j=0; $j<count($comments); $j++){
//         echo "commentAuthor";
//         $com = getpostComments($comments[$j]);
//         echo $com;
//     }
// }

$posts = new Posts();
foreach ($posts as $post){
    echo $post->getTitle();
    echo $post->getContent();
    echo $post->getDate();
    echo $post->getAuthor();
    $comments = new comments($post->getComments());
    foreach ($comments as $comment) {
        echo $comment->getCommentAuthor();
        echo $comment->getCommentContent();
    }
}

?>