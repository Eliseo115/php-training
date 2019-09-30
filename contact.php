<?php
require_once('nav.php');
require_once('content.php');
require_once('functions.php');
$loggedin = False;
$firstName = $_POST["firstname"] ?? "Friend";
$lastName = $_POST["lastname"];
?>
<html>
<head>
</head>
<body>
  <nav>
    <?php makeNav($myNav, $loggedin); ?>
  </nav>
  <section>
    <div>
        <?php 
        makeContent($myContent,0); 
        echo 'Hello '. $firstName;
        echo  $lastName;
        ?>
    </div>
  </section>
  <section >
  <form class="" action="contact.php" method="post">
    <p>First Name: <input type="text" name="firstname" value=""> </p>
    <p>Last Name: <input type="text" name="lastname" value=""> </p>
    <input type="submit" name="" value="Submit">
  </form>
  </section>
</body>
</html>
