<?php
require_once "../classes/dbclasses.php";
class Post extends Dbh{

    
    public function __construct(){
    }

    public function createTopic($desc,$forum_id,$userId){
     
        $stmt = $this->connect()->prepare("INSERT INTO topics (name,userId,forumId) VALUES (?, ?,?)");
    
        if(!$stmt->execute(array($desc,$userId,$forum_id))){
            $stmt = null;
            return false;   
        }else{
            // echo "true";
            // exit();
            return true;  
        }
    }

}

?>