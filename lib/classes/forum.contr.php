<?php
require_once "../classes/dbclasses.php";
class Forum extends Dbh{

    
    public function __construct(){
    }

    public function getForumIdByName($name){
        $stmt = $this->connect()->prepare("SELECT id FROM forums WHERE name = ?");
        if(!$stmt->execute(array($name))){
            return [];
        }
        if($stmt->rowCount() > 0){
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return  $data[0]['id'];
        }else{
            return null;
        }
        return null;
    }


}

?>