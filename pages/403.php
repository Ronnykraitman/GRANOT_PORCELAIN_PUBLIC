<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/403.css">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  </head>
<body>
    <nav role="navigation" id="mynav">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a href="../index.php#hero">
              <li>Home</li>
            </a>
            <a href="../index.php#about">
              <li>About</li>
            </a>
            <a href="explore.php">
              <li>Explore</li>
            </a>
            <a href="contact.php">
              <li>Contact</li>
            </a>
            <a href="social.php">
              <li>Social</li>
            </a>
            <a href="cart.php">
            <li><i id="cart_btn" class="fa fa-shopping-basket"></i><?php echo $_SESSION['overall_quantity']?></li>
              </a>
          </ul>
        </div>
      </nav>

<div class="maincontainer">
    <div class="bat">
      <img class="wing leftwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
      <img class="body" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
      <img class="wing rightwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
    </div>
    <div class="bat">
      <img class="wing leftwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
      <img class="body" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
      <img class="wing rightwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
    </div>
    <div class="bat">
      <img class="wing leftwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
      <img class="body" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
      <img class="wing rightwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
    </div>
    <img class="foregroundimg" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/HauntedHouseForeground.png" alt="haunted house">
  
  </div>
  <h1 class="errorcode">ERROR 403</h1>
  <div class="errortext">This area is forbidden. Turn back now!</div>
</body>


