<?php

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';


$host = $_SERVER['HTTP_HOST'];
$url = $protocol . $host;
$image = "";
if($host == 'localhost'){
    $image = $url."/mystic/images/logo.png";
    $url = $protocol . $host.'/mystic';
}else{
    $image = $url."/images/logo.png";
}



?>
<nav class="navbar">

      <ul class="nav-links">
           
        <li><a href="/mystic/index.php">Home</a></li>
       </ul>
        <div class="logo">
            <img src="<?=$image?>" alt="Logo">
        </div>
        <ul class="nav-links">
           
            <li><a href="<?=$url?>/lib/views/games.php">Games</a></li>
            <li><a href="<?=$url?>/lib/views/movies.php">Movies</a></li>  
            <?= isset($_SESSION['userid']) ? '<li><a href="'.$url.'/lib/views/forums.php'.'">Forums</a></li> ':' ' ?>
            <?= isset($_SESSION['userid']) ? '<li><a href="'.$url.'/lib/includes/logout.inc.php">log out</a></li>  ':'  <li><a href="'.$url.'/lib/views/login.php'.'">login</a></li>' ?>
            <?= isset($_SESSION['userid']) ? ' ':' <li><a href="'.$url.'/lib/views/reg.php'.'">Sign up</a></li>' ?>
        </ul>
</nav>

