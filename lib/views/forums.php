<?php

include_once '../includes/session.inc.php';
session::checkSession();
include("../layouts/header.php");
    
    if(isset($_GET['topic'])){
        echo "games";
    }

?>
<link rel="stylesheet" type="text/css" href="../../style.css">
<body>
    <ul>
        <li><a href="forums.php?topic=games">Games</a></li>
        <li>Music</li>
        <li>music</li>
    </ul>
</body>
<?php include("../layouts/footer.php"); ?>
