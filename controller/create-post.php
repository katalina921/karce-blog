<!-------allows us to created a post------->
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
            <li><a href="index.php">Blog</a></li>
            <li><a href="controller/logout-user.php">Logout</a></li>
            <li><a href="portfolio.html">My Portfolio</a></li>
        </ul>
    </body>
</html>

    <?php

require_once(__DIR__ . "/../model/config.php");

$title =  filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

if($query){
    echo  "<p>Successfully inserted post: $title</p>";
}
else{
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
