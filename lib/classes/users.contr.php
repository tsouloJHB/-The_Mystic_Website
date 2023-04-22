<?php



class Users extends Dbh{
    public function __construct(){

    }

    public function getUser($userId){
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id = ?");
        if(!$stmt->execute(array($userId))){
            return [];
        }
        if($stmt->rowCount() > 0){

            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
        return null;
    }
}

?>