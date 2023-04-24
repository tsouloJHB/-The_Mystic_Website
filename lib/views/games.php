<?php

include_once '../includes/session.inc.php';

include_once("../layouts/header.php");
include_once "../classes/media-contr.php";

//get movies
$media = new Media();

$games = $media->getAllGames();

?>
<link rel="stylesheet" type="text/css" href="../../style.css">
<body>
<?php  include "../layouts/navbar.php"; ?>
<?php  include "../layouts/hero.php"; ?>
   

<section id="products">
        <!-- Content of the Products section goes here -->

      <section class="movies-section">
       <div class="header-section"><p>Games</p></div>
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
                            <a href='../views/mediadetails.php?type=games&typeid=".$game['id']."'>
                            <img src='../../".$game['thumbnail']."' alt='Movie 1' class='movie-image'>
                            </>
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
    
  
</body>
<?php include("../layouts/footer.php"); ?>
