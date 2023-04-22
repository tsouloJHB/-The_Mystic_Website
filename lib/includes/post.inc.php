<?php

include "../classes/post-contr.php";
if($_POST['submit-topic']){
    $pwd = $_POST['desc'];
    //create post from user 
    $post = new Post();
    $post->createTopic($desc,$_SESSION['user_id']);
}

?>