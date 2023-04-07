<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB_NAME','mystic');
class Dbh {
    protected function connect(){
        try{
            $conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
            return $conn;
        }catch(PDOException $e){
            print "Error!: " . $e->getMessage()."<br/>";
            die();
        }
    }
}

?>