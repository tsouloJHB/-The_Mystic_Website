<?php
//the module
require_once 'dbclasses.php';
 class Login extends Dbh{

    
    protected function getUser($uid,$pwd) {
        
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        
    
        if(!$stmt->execute(array($uid,$uid))){
            $stmt = null;
            header("location: ../views/login.php?error=stmtfailed");
            exit();    
        }
 
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../views/login.php?error=usernotfound");
            exit(); 
        }
      
        $userData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd  = password_verify($pwd,$userData[0]["password"]);

        if($checkPwd == false){
            $stmt = null;
            header("location: ../views/login.php?error=wrongpassword");
            exit(); 

        }elseif($checkPwd){
    
            session_start();
      
            if($userData[0]['admin'] == 1){
             
                $_SESSION["admin"] = true;
            }
         
            $_SESSION["userid"] = $userData[0]["id"];
            $_SESSION["username"] = $userData[0]["username"];
            $stmt = null;
        }
        return $stmt = null;
        $stmt = null;
    }


}

?>