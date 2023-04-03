<?php

class LoginContr extends Login{
    private $uid;
    private $pwd;



    public function __construct($uid,$pwd,){
        $this->uid = $uid;
        $this->pwd = $uid;

    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("location: ../../index .php?error=emptyinput");
            exit(); 
        }
    
        $this->getUser($this->uid,$this->pwd);
    }   

    private function emptyInput(){
        $results;
        if(empty($this->uid)|| empty($this->pwd)){
            $results = false;
        }else{
            $results = true;
        }
        return $results;
    }


}
?>