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
<?php  include "../layouts/navbar.php"; ?>
<?php  include "../layouts/hero.php"; ?>
    <!-- <ul>
        
    </ul> -->
    <div class="row">
  <div class="column">
  <div class="topics">
      <p>Forums</p>
      <ul>
        <?= isset($_GET['forum']) && $_GET['forum'] == "games" ? '<li ><a class="active" href="forums.php?forum=games">Games</a></li>':' <li ><a class="a" href="forums.php?forum=games">Games</a></li>' ?>
       
        <hr>
        
        <?= isset($_GET['forum']) && $_GET['forum'] == "music" ? '<li ><a class="active" href="forums.php?forum=music">Music</a></li>':' <li ><a class="a" href="forums.php?forum=music">Music</a></li>' ?>
        <hr>
        
        <?= isset($_GET['forum']) && $_GET['forum'] == "movies" ? '<li ><a class="active" href="forums.php?forum=movies">Movies</a></li>':' <li ><a class="a" href="forums.php?forum=movies">Movies</a></li>' ?>
      </ul>
    </div>
  </div>
  <div class="column">
  <div class="topics">
      <h3>Topics</h3>
      <div class="content">
      <?php
    if(isset($_GET['forum'])){

    
    $t_name = $_GET['forum'];
    
    foreach($topics as $topic_data){
        $topic_id = $topic_data['id'];
        if(isset($_GET['topic'])){
            if($topic_id == $_GET['topic']){
                echo '<p class="topic"> '.'<a href=forums.php?forum='.$t_name.'&topic='.$topic_id.'>'. $topic_data['name'] . '<span class="add-button "> </span> </a> </p>';  
            }
          
        }else{
            echo '<p class="topic"> '.'<a href=forums.php?forum='.$t_name.'&topic='.$topic_id.'>'. $topic_data['name'] . '<span class="add-button "> </span></a> </p>';
        }
       
        
    }

    if(!isset($_GET['topic'])){
        ?>
             <div class="col-md-8 col-md-offset-2">
	        
    		
    		
    		<form class="form-post" action="<?=  $_SERVER['REQUEST_URI']; ?>" method="POST">
    		    
    		  

    		    <div class="form-group">
    		        <label for="description">Create topic</label>
    		        <textarea rows="5" class="form-control" name="desc" ></textarea>
                    
    		    </div>
    		    <input type="hidden"  name="forum" value="<?= $_GET['forum'] ?>"/>
    	
    		    
    		    <div class="form-group">
    		        <input type="submit" class="btn btn-primary" name="submit" value="submit">
    		        
    		    </div>
    		    
    		</form>
		</div>
      </div>   
        <?php
    }
    
    if(isset($_GET['topic']) && $posts != null){
        echo '<div class="comment-container">';
        
        foreach($posts as $post){
            
            $image  = $post['profilePicture'] != null ? $post['profilePicture'] : 'uploads/profileImages/profileImage.png';
           
            echo '<div class="comment">';
            echo '
                <div class="profile-image">
                    <img src="../../'.$image.'" alt="Profile Image">
                </div>
            ';
            echo '
            <div class="comment-details">
                <div class="user-info">
                 <h3> '.$post['username'].'</h3>
                 <span> '.$post['timeStamp'].'</span>
                </div>
                <div class="comment-text">
                    <p  '.$post['message'].'</p>
                </div>
            </div>
            </div>    
            ';
            //echo '<p> '.$post['username'].'</p>';
            // echo '<p class="comment-text" '.$post['message'].'</p>';
            // echo '<p class="comment-timestamp"> '.$post['timeStamp'].'</p></div>';
        }
        echo '</div>';
      
    }
        //comment on post
    if(isset($_GET['topic'])){
        
        ?>
	
        <form class="form-comment" action="<?=  $_SERVER['REQUEST_URI']; ?>" method="POST">
    		    
    		  

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
  </div>
    </div>
  </div>
</div>
    
  
</body>
<?php include("../layouts/footer.php"); ?>
