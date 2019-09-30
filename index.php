<?php
$servername = "localhost";
$username = "root";
$password = "secret";

//Create connection
$conn = new mysqli($servername,$username,$password);

//Check connection
if ($conn->connect_error) {
  die("No worky " . $conn->connect_error);
} else {
$success = "It worked!";
}

$thisPagename = $_GET["page"] ?? "HOME";

$sql = "SELECT * FROM pagename = '$thisPagename'";
$result = $conn->query($sql);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav class="nav">
    <img class="logo" src="img/hero.jpg" alt="trees">
    <div class="php-nav">
    <?php
      $sql = "SELECT  pagename FROM test.content";
      $result = $conn->query($sql);
      echo "<ul>";
      while  ( $row = $result->fetch_assoc() ) {
        echo "<li><a href='index.php?page=" . $row['pagename'] . "'>" .$row['pagename']. "<?a></li>";     
       }
       echo "</ul>";
    ?>
    </div>
  </nav>
  <section class= "content">
    <div>
        <?php 
          $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();  
          echo "<p>" . $row['pagetitle'] . "</p>";
          echo "<p>" . $row['pagename'] . "</p>";
          echo $row['pagecontent'];
        ?>
    </div>
  </section>
  <section class="grey">
    
  </section>
  
</body>
</html>
