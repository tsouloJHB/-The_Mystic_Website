<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';


$host = $_SERVER['HTTP_HOST'];
$url = $protocol . $host;
$image = "";
if($host == 'localhost'){
    $image = $url."/mystic/images/logo.png";
}else{
    $image = $url."/images/logo.png";
}

?>
<nav class="navbar">

      <ul class="nav-links">
           
        <li><a href="#home">Home</a></li>
       </ul>
        <div class="logo">
            <img src="<?=$image?>" alt="Logo">
        </div>
        <ul class="nav-links">
           
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
</nav>

