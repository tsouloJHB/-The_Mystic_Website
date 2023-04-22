<?php

class Post extends Dbh{

    
    public function __construct(){
    }

    public function createTopic($desc,$userId){
     
        $stmt = $this->connect()->prepare("INSERT INTO topics (name,userId) VALUES (?, ?)");
    
        if(!$stmt->execute(array($desc,$userId))){
            $stmt = null;
            return false;   
        }else{
            return true;  
        }
    }

}

?>