<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','mystic');

    try{
        $conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
    }

    catch (PDOException $e){
        exit("ERROR: ". $e->getMessage());
    }
?>
