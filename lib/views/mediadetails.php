<?php 
session_start();
include("../layouts/header.php"); 
include_once "../classes/media-contr.php";

//get media info
$media = new Media();
$movie = null;
$games = null;
if(isset($_GET['type']) && isset($_GET['typeid'])){
    $id = $_GET['typeid'];
    if($_GET['type'] == "games" && $_GET['typeid'] != null){
        //the the game info 
        $games = $media->getAGame($id);
    }elseif($_GET['type'] == "movies" && $_GET['typeid'] != null){
        //the the movie info 
      $movie = $media->getAMovie($id);
      
    }elseif($_GET['type'] == "music" && $_GET['typeid'] != null){

    }else{
        echo "Incorrect info supplied";
    }
}else{
    echo "missing info";
}

?>

<body>
<?php  include "../layouts/navbar.php"; ?>
<?php  include "../layouts/hero.php"; ?>

<div class="container-media media-section">

    <?php
    $host = $_SERVER['HTTP_HOST'];
      if(isset($_GET['type']) && isset($_GET['typeid'])){
          if($movie != null){
            echo '<div class="image-column">
                    <img src="../../'.$movie[0]['thumbnail'].'" alt="Movie Image">
                  </div>
                  
                  <div class="description-column">
                    <h1 class="movie-title">'.$movie[0]['name'].'</h1>
                    <p class="movie-description">
                      '.$movie[0]['description'].'
                    </p>
                    <p class="movie-release-date">File uploaded: <span>'.date('d F Y', (int)$movie[0]['timeStamp'] ).'</span></p>
                    <p class="movie-genre">Genre: <span>'.$movie[0]['genre'].'</span></p>
                    <p class="movie-cast">Cast: <span>Actor 1, Actor 2, Actor 3</span></p>
                    <a href="../../'.$movie[0]['link'].' " download class="movie-download-button">Download</a>
                  </div> 
                  
                  ';
          }
          if($games != null){
            echo '<div class="image-column">
                    <img src="../../'.$games[0]['thumbnail'].'" alt="Movie Image">
                  </div>
                  
                  <div class="description-column">
                    <h1 class="movie-title">'.$games[0]['name'].'</h1>
                    <p class="movie-description">
                      '.$games[0]['description'].'
                    </p>
                    <p class="movie-release-date">File uploaded: <span>'.date('d F Y', (int)$games[0]['timeStamp'] ).'</span></p>
                    <p class="movie-genre">Genre: <span>'.$games[0]['genre'].'</span></p>
                    <p class="movie-cast">Cast: <span>Actor 1, Actor 2, Actor 3</span></p>
                    <a href="../../'.$games[0]['link'].' " download class="movie-download-button">Download</a>
                  </div> 
                  
                  ';
          }
      }  
    ?>
    <!-- <div class="image-column">
      <img src="../../images/avatar.jpeg" alt="Movie Image">
    </div>
    <div class="description-column">
      <h1 class="movie-title">Movie Title</h1>
      <p class="movie-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper mi eu bibendum faucibus. Fusce sed turpis sapien. In hac habitasse platea dictumst. Nulla accumsan metus vitae ex pharetra auctor. Vestibulum convallis vel nunc eu fermentum. Vestibulum venenatis massa ut sagittis scelerisque. Nulla lacinia, mi a feugiat aliquam, orci velit mollis dolor, eget egestas mi ligula ut mi.
      </p>
      <p class="movie-release-date">Release Date: <span>January 1, 2022</span></p>
      <p class="movie-genre">Genre: <span>Action, Thriller</span></p>
      <p class="movie-cast">Cast: <span>Actor 1, Actor 2, Actor 3</span></p>
      <a href="movie_download.mp4" class="movie-download-button">Download</a>
    </div> -->
 
</div>

</body>


<h3>Hi</h3>
<?php include("../layouts/footer.php"); ?>