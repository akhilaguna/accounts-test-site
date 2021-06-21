<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>Portfolio Homepage</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper active-nav-link">
          <a href="index.php">Home</a>
        </div>
        <?php
            if(isset($_SESSION["useruid"]))
            {
                echo "<div class='nav-link-wrapper active-nav-link'><a href='profile.php'>Profile Page</a></div>";
                echo "<div class='nav-link-wrapper active-nav-link'><a href='includes/logout.inc.php'>Log Out</a></div>";
            }
            else
            {
                echo "<div class='nav-link-wrapper active-nav-link'><a href='login.php'>Log In</a></div>";
                echo "<div class='nav-link-wrapper active-nav-link'><a href='signup.php'>Sign Up</a></div>";  
            }
        ?>

      </div>

      <div class="right-side">
        <div class="brand">
          JORDAN HUDGENS
        </div>
      </div>
    </div>

    <div class="content-wrapper">