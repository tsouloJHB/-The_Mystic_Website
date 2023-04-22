
<?php
class session{

    public static function checkSession(){
        session_start();
        if(!isset($_SESSION['userid'])){
             self::destroy();
            //  header("location: ../../login.php");
            //  exit(); 
        }
    }

    public static function checkLogin(){
            session_start();
            if(isset($_SESSION['userid'])){
                header("location: ./login.php");
                exit(); 
        }
    }

    public static function destroy(){
        session_unset();
        session_destroy();
        header("location: ./login.php");
        exit(); 
    }

 }
 ?>