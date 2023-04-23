<?php 
session_start();
include("lib/layouts/header.php"); 
include_once "lib/classes/media-contr.php";

//get movies
$media = new Media();
$movies = $media->getAllMovies();
$games = $media->getAllGames();

?>

<body>
<!-- <div class="home-content">


  <div id="indicator"></div>

    <div class="container">
        mystic site
        <br>
        <nav>
        <a href="#">HOME</a>
        <a href="./lib/views/games.php">Games</a>
        <a href="#">Music</a>
        
        <a href="#"></a>
        <?php
          if(isset($_SESSION["userid"])){
        ?>
        <a href="./lib/views/forums.php">Forums</a>
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
</div> -->
<?php  include "lib/layouts/navbar.php"; ?>
<!-- <nav class="navbar">

      <ul class="nav-links">
           
        <li><a href="#home">Home</a></li>
       </ul>
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
           
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
</nav> -->
<header class="hero-section">
        <div class="hero-image">
            <img src="images/download.jpeg" alt="Hero Image">
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Games - movies - music</h1>
            <p class="hero-subtitle">Download upload and chat</p>
            <a href="#products" class="cta-button">Explore Now</a>
        </div>
    </header>

    <section id="products">
        <!-- Content of the Products section goes here -->

      <section class="movies-section">
        <h2 class="section-title">Popular Movies</h2>
        <div class="movies-container">
            <div class="movies-row">
            <?php

                //get games
                foreach($games as $game){
                  $desc = $game['description'];
                  if (strlen($game['description']) > 20) {
                    $desc = substr($game['description'], 0, 20) . "...";
                  } 
                  echo " <div class='movie-item'>
                            <div class='movie-image-container'>
                            <img src='".$game['thumbnail']."' alt='Movie 1' class='movie-image'>
                            </div>
                            <div class='movie-details'>
                            <h3 class='movie-title'>".$game['name']."</h3>
                            <p class='movie-description'>$desc</p>
                            </div>
                          </div>    
                  ";
                }
            ?>    
              <!-- Add more movie items as needed -->
            </div>
        <!-- Add more movies rows as needed -->
      </div>
    </section>
        <section class="movies-section">
  <h2 class="section-title">Popular Movies</h2>
  <div class="movies-container">
    <div class="movies-row">
      <?php

         
          //get movies
          foreach($movies as $movie){
            $desc = $movie['description'];
            if (strlen($movie['description']) > 20) {
              $desc = substr($movie['description'], 0, 20) . "...";
            } 
            echo " <div class='movie-item'>
                      <div class='movie-image-container'>
                      <img src='".$movie['thumbnail']."' alt='Movie 1' class='movie-image'>
                      </div>
                      <div class='movie-details'>
                      <h3 class='movie-title'>".$movie['name']."</h3>
                      <p class='movie-description'>$desc</p>
               
                      </div>
                    </div>    
            ";
          }
      ?>
      <!-- Add more movie items as needed -->
    </div>
    <!-- Add more movies rows as needed -->
  </div>
</section>


    </section>

<h3>Hi</h3>
<?php include("lib/layouts/footer.php"); ?>