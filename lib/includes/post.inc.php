<?php
// session_start();
require_once "../classes/forum.contr.php";
require_once "../classes/post-contr.php";

if(isset($_POST['submit'])){
    $desc = $_POST['desc'];
    $forum_name = $_POST['forum'];
    //create post from user 
    $post = new Post();
     //get forum id
    $forum_obj = new Forum();
    $forum_id = $forum_obj->getForumIdByName($forum_name);

   
    $post->createTopic($desc,$forum_id,$_SESSION['userid']);
    //header("location: ./forum.php?");
    //exit(); 
}

if(isset($_POST['submit-comment'])){    
    $forum_name = $_POST['forum'];
    $topic_id = $_POST['topicId'];
    $message = $_POST['message'];

    $post = new Post();
    //get forum id

    $forum_obj = new Forum();
    $forum_id = $forum_obj->getForumIdByName($forum_name);

    $post->createComment($_SESSION['userid'],$topic_id,$forum_id,$message);
}

function writeMsg($desc) {
    //$desc = $_POST['desc'];
    //create post from user 
    $post = new Post();
    $post->createTopic($desc,$_SESSION['userid']);
}


?>