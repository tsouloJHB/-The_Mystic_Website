<?php
    include_once "../classes/dbclasses.php";
    include "../classes/users.contr.php";   
class Topic  extends Dbh{

    private $users;

    public function __construct(){
        $this->users = new Users();
    }

   public function getTopics($name){
    //get
    $topicId = $this->getTopicIdByName($name);
    if($topicId == null){
        return [];
    }
    $stmt = $this->connect()->prepare("SELECT * FROM topics WHERE forumId = ?");
    if(!$stmt->execute(array($topicId))){
        return [];
    } 
    if($stmt->rowCount() > 0){

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
    }

    private function getTopicIdByName($name){
        $stmt = $this->connect()->prepare("SELECT id FROM forums WHERE name = ?");
        
    
        if(!$stmt->execute(array($name))){
            $stmt = null;
            return null;   
        }
        if($stmt->rowCount() == 0){
            $stmt = null;
            return null;
        }else{
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data[0]["id"];
        }
        return null;
    }

    public function getPostByTopic($topic_id,$forum){
        $stmt = $this->connect()->prepare("SELECT * FROM posts WHERE topicId = ? AND forum = ?");

        if(!$stmt->execute(array($topic_id,$forum))){
            $stmt = null;
            return null;   
        }
        if($stmt->rowCount() == 0){
            $stmt = null;
            return null;
        }else{
            //get the user data
            $merged_data = [];
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $post){
                $user_data = $this->users->getUser($post["userId"]);
                $new_array = array("username"=>$user_data[0]['username'],"email"=>$user_data[0]['email']);
                $last = $post + $new_array;
               // array_push($post,$new_array);
                //$new = array_merge($post,$user_data);
                array_push($merged_data,$last);
            }
     
            // if($user_data){

                $new = array_merge($data,$user_data);
                // print_r($new);
             
                // while ($row = $result2->fetch_assoc()) {
                //     $merged_data[] = $row;
                // }
            //     return $new;
            // }else{
            //     return null;
            // }
            return $merged_data ;
        }
        return null;
    }

}

?>