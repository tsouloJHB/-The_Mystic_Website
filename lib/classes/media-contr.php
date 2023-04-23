<?php

include_once 'dbclasses.php';

class Media extends Dbh{

    public function __construct(){
     
    }

    public function getAllMovies(){
        $stmt = $this->connect()->prepare("SELECT * FROM movies ");
        if(!$stmt->execute()){
            return [];
        }
        if($stmt->rowCount() > 0){

            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
        return null;
    }

    public function getAllGames(){
        $stmt = $this->connect()->prepare("SELECT * FROM games ");
        if(!$stmt->execute()){
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