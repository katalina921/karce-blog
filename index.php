<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="CSS/custom-style.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        <link type="text/css" rel="stylesheet" href="Js/portfolio.js">
        <link rel="stylesheet" href="https://www.google.com/fonts#UsePlace:use/Collection:Lobster+Two:700italic" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
    </head>
<body>
        <ul class="nav nav-tabs" role="tablist" id="nav">
            <li class="active"><a href="portfolio.html">Home</a></li>
            <li><a href="index.php">Blog</a></li>
            <li><a href="post.php">Create Post</a></li>
            <li><a href="controller/logout-user.php">Logout</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="portfolio.html">My Portfolio</a></li>
        </ul>
    </body>
</html>




<?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if(authenticateUser()){
    echo 'logged in';
require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");

?>
