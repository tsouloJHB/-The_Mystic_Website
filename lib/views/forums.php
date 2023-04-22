<?php

include_once '../includes/session.inc.php';
session::checkSession();
include("../layouts/header.php");
include("../classes/topic-controller.php");

  
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
        $forum =  $_GET['forum'];
        $posts = $topic->getPostByTopic($topic_id,$forum);
       
    }

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
    $t_name = $_GET['forum'];
    
    foreach($topics as $topic_data){
        $topic_id = $topic_data['id'];
        echo '<p> '.'<a href=forums.php?forum='.$t_name.'&topic='.$topic_id.'>'. $topic_data['name'] . '</a></p>';
    }
    if(!isset($_GET['topic'])){
        ?>
             <div class="col-md-8 col-md-offset-2">
	        
    		<p>Create topic</p>
    		
    		<form action="" method="POST">
    		    
    		  
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="desc" ></textarea>
    		    </div>
    		    
    	
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary" name="submit-topic">
    		            Create
    		        </button>
    		    
    		    </div>
    		    
    		</form>
		</div>
        <?php
    }
    if(isset($_GET['topic'])){
        foreach($posts as $post){
            echo '<p> '.$post['username'].'</p>';
            echo '<p> '.$post['message'].'</p>';
            echo '<p> '.$post['timeStamp'].'</p>';
        }
    }

    ?>
</body>
<?php include("../layouts/footer.php"); ?>
