<?php

class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email; 


    public function __construct($uid,$pwd,$pwdRepeat,$email){
        $this->uid = $uid;
        $this->pwd = $uid;
        $this->pwdRepeat = $uid;
        $this->email = $email;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: ../../index.php?error=emptyinput");
            exit(); 
        }
        if($this->invalidUid() == false){
            header("location: ../../index.php?error=username");
            exit(); 
        }
        if($this->invalidEmail() == false){
            header("location: ../../index.php?error=email");
            exit(); 
        }
        if($this->pwdMatch() == false){
            header("location: ../../index.php?error=pwsmatch");
            exit(); 
        }
        
        if($this->uidTakenCheck() == false){
            header("location: ../../index.php?error=usereemailtaken");
            exit(); 
        } 
        $this->setUser($this->uid,$this->pwd,$this->email);
    }   

    private function emptyInput(){
        $results;
        if(empty($this->uid)|| empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)){
            $results = false;
        }else{
            $results = true;
        }
        return $results;
    }

    private function invalidUid(){
        $results;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
            $results = false;
        }else{
            $results = true;
        }
        return $results;
    }

    
    private function invalidEmail(){
        $results;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $results = false;
        }else{
            $results = true;
        }
        return $results;
    }

    private function pwdMatch(){
        $results;
        if($this->pwd !== $this->pwdRepeat){
            $results = false;
        }else{
            $results = true;
        }
        return $results;
    }

    
    private function uidTakenCheck(){
        $results;
        if(!$this->checkUser($this->uid,$this->email) ){
            $results = false;
        }else{
            $results = true;
        }
        return $results;
    }


}

?>