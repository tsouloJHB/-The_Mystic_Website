<?php 
    // require_once("config.php");
   

    if($_POST['submit']){
        //get the data from the form
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
     

        //instantiate signup class
        include "../classes//dbclasses.php";
        include "../classes/login.classes.php";
        include "../classes/login-contr.classes.php";
       

        $login = new LoginContr($uid,$pwd);
        //running error handlers and user signup
        $login->loginUser();

       
 
        if(isset( $_SESSION["admin"])){
            header("location: ../views/admin.php");
            exit();
        }
        //going back to front page
        header("location: ../../index.php?error=none");
    }

?>
