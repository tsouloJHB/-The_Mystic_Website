<?php

include_once '../includes/session.inc.php';

include_once("../layouts/header.php");
include_once "../classes/media-contr.php";

//get movies
$media = new Media();

$movies = $media->getAllMovies();

?>
<link rel="stylesheet" type="text/css" href="../../style.css">
<body>
<?php  include "../layouts/navbar.php"; ?>
<?php  include "../layouts/hero.php"; ?>
   

<section id="products">
        <!-- Content of the Products section goes here -->
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
                      <a href='../../lib/views/mediadetails.php?type=movies&typeid=".$movie['id']."'>
                      <img src='../../".$movie['thumbnail']."' alt='Movie 1' class='movie-image'>
                      </a>
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
  
</body>
<?php include("../layouts/footer.php"); ?>
