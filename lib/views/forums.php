<?php

include_once '../includes/session.inc.php';
session::checkSession();
include_once("../layouts/header.php");
require_once '../includes/post.inc.php';
require_once "../classes/topic-controller.php";
require_once "../classes/forum.contr.php";

   
  
    $topic = new Topic(); 
    $topics = [];
    $posts = [];
    if(isset($_GET['forum'])){
        //get forum topics
        //sanitize the data for sending to the database
        $name =  $_GET['forum'];
        $topics = $topic->getTopics($name);
  
    }else {
        //get forum topics
    }
    //if topics is set
    if(isset($_GET['topic'])){
        //get post from topic
        //sanitize the data for sending to the database
        $topic_id =  $_GET['topic'];
        $forum_name =  $_GET['forum'];
        //get forum id
        $forum = new Forum();
        $forum_id = $forum->getForumIdByName($forum_name);
        $posts = $topic->getPostByTopic($topic_id,$forum_id);
       
    }

    //form submits
    // if(isset($_POST['submit'])){

    // }

?>
<link rel="stylesheet" type="text/css" href="../../style.css">
<body>
    <ul>
        <li><a href="forums.php?forum=games">Games</a></li>
        <li><a href="forums.php?forum=music">Music</a></li>
        <li>music</li>
    </ul>

    <h3><?= (isset($_GET['forum'])) ?$_GET['forum'] :"Games"?></h3>
    <?php
    if(isset($_GET['forum'])){

    
    $t_name = $_GET['forum'];
    
    foreach($topics as $topic_data){
        $topic_id = $topic_data['id'];
        if(isset($_GET['topic'])){
            if($topic_id == $_GET['topic']){
                echo '<p> '.'<a href=forums.php?forum='.$t_name.'&topic='.$topic_id.'>'. $topic_data['name'] . '</a></p>';  
            }
          
        }else{
            echo '<p> '.'<a href=forums.php?forum='.$t_name.'&topic='.$topic_id.'>'. $topic_data['name'] . '</a></p>';
        }   
      
    }

    if(!isset($_GET['topic'])){
        ?>
             <div class="col-md-8 col-md-offset-2">
	        
    		<p>Create topic</p>
    		
    		<form action="<?=  $_SERVER['REQUEST_URI']; ?>" method="POST">
    		    
    		  

    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="desc" ></textarea>
                    
    		    </div>
    		    <input type="hidden"  name="forum" value="<?= $_GET['forum'] ?>"/>
    	
    		    
    		    <div class="form-group">
    		        <input type="submit" class="btn btn-primary" name="submit" value="submit">
    		        
    		    </div>
    		    
    		</form>
		</div>
        <?php
    }
    if(isset($_GET['topic']) && $posts != null){
        foreach($posts as $post){
            echo '<p> '.$post['username'].'</p>';
            echo '<p> '.$post['message'].'</p>';
            echo '<p> '.$post['timeStamp'].'</p>';
        }
      
    }
        //comment on post
    if(isset($_GET['topic'])){
        
        ?>
	
        <form action="<?=  $_SERVER['REQUEST_URI']; ?>" method="POST">
    		    
    		  

    		    <div class="form-group">
    		        <label for="description">comment</label>
    		        <textarea rows="5" class="form-control" name="message" ></textarea>
                    
    		    </div>
    		    <input type="hidden"  name="topicId" value="<?= $_GET['topic'] ?>"/>
                <input type="hidden"  name="forum" value="<?= $_GET['forum'] ?>"/>
                
    		    
    		    <div class="form-group">
    		        <input type="submit" class="btn btn-primary" name="submit-comment" value="submit">
    		        
    		    </div>
    		    
    		</form>

        <?php
    }
    }
    ?>
</body>
<?php include("../layouts/footer.php"); ?>
