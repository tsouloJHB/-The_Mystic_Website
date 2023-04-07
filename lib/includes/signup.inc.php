<?php 
    // require_once("config.php");
   

    if($_POST['submit']){
        //get the data from the form
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
        $pwdsrepeat = $_POST['pwdsrepeat'];

        //instantiate signup class
        include "../classes//dbclasses.php";
        include "../classes/signup.classes.php";
        include "../classes/signup-contr-classes.php";
       

        $signup = new SignupContr($uid,$pwd,$pwdsrepeat,$email);
        //running error handlers and user signup
        $signup->signupUser();
        //going back to front page
        header("location: ../../index.php?error=none");
    }

?>
