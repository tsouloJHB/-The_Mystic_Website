<?php 
session_start();
include("lib/layouts/header.php"); ?>

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

<nav class="navbar">

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
</nav>
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
      <div class="movie-item">
        <img src="images/avatar.jpeg" alt="Movie 1" class="movie-image">
        <div class="movie-details">
          <h3 class="movie-title">Movie Title 1</h3>
          <p class="movie-description">Short description about Movie 1</p>
        </div>
      </div>
      <div class="movie-item">
        <img src="movie2.jpg" alt="Movie 2" class="movie-image">
        <div class="movie-details">
          <h3 class="movie-title">Movie Title 2</h3>
          <p class="movie-description">Short description about Movie 2</p>
        </div>
      </div>
      <!-- Add more movie items as needed -->
    </div>
    <div class="movies-row">
      <div class="movie-item">
        <img src="movie3.jpg" alt="Movie 3" class="movie-image">
        <div class="movie-details">
          <h3 class="movie-title">Movie Title 3</h3>
          <p class="movie-description">Short description about Movie 3</p>
        </div>
      </div>
      <div class="movie-item">
        <img src="movie4.jpg" alt="Movie 4" class="movie-image">
        <div class="movie-details">
          <h3 class="movie-title">Movie Title 4</h3>
          <p class="movie-description">Short description about Movie 4</p>
        </div>
      </div>
      <!-- Add more movie items as needed -->
    </div>
  </div>
</section>

    </section>

<h3>Hi</h3>
<?php include("lib/layouts/footer.php"); ?>