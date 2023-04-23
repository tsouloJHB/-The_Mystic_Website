<?php 
session_start();
include("../layouts/header.php"); 
include_once "../classes/media-contr.php";

?>

<body>
<?php  include "../layouts/navbar.php"; ?>
<?php  include "../layouts/hero.php"; ?>

<div class="container media-section"> 
    <div class="image-column">
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
    </div>
</div>

</body>


<h3>Hi</h3>
<?php include("../layouts/footer.php"); ?>