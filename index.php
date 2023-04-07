<?php 
session_start();
include("lib/layouts/header.php"); ?>

<body>
<div class="home-content">


  <div id="indicator"></div>

    <div class="container">
        mystic site
        <br>
        <nav>
        <a href="#">HOME</a>
        <a href="#">Games</a>
        <a href="#">Music</a>
        <a href="#"></a>
        <?php
          if(isset($_SESSION["userid"])){
        ?>
     
        <a href="./lib/includes/logout.inc.php">log out</a>  
      
        <?php
          }else{
        ?>
     
            <a href="lib/views/login.php">Login</a>  
      
       <?php
          }
       ?>
        <div id="indicator"></div>
       </nav>
    </div>
</div>



<?php include("lib/layouts/footer.php"); ?>