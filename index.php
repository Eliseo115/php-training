<?php
session_start();
require_once("connect.php");
require_once("functions-new.php");
$loggedIn = $_SESSION['loggedin'] ?? "not logged in";

// This pulls the text from after the first / in the
// URL and sets it to an array
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

// This pulls the last item out of the URI array and sets
// $thisPagename variabel to that item
$thisPagename = array_pop($uriSegments);

// This sets the pagename if one is provided in the url
if ($thisPagename == "") {
  $thisPagename = "index";
}
// $thisPagename = $_GET["page"] ?? "HOME";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php //makeTitle($conn, $thisPagename); ?> </title>
</head>
<body>
  <nav class="nav">
    <img class="logo" src="img/hero.jpg" alt="trees">
    <div class="php-nav">
    <?php
    makeNav($conn, $loggedIn);
    echo "<p>" . $loggedIn . "</p>";
    ?> 
  </div>
  
</nav>
  <section class= "content">
    <div>
       <?php
      //  echo $thisPagename;
       makeContent($conn, $thisPagename);
       ?>
    </div>
    <img class="tower" src="img/Tower.jpg" alt="Denmark Tower">
  </section>
  <section class="grey">
    
  </section>
  
</body>
</html>
