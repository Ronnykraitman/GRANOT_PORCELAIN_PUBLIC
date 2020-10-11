<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../style/empty_cart.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <script  src="https://www.paypal.com/sdk/js?client-id=Ab0NTyEuowygQXlK9XQIAal1GvUc9Lngon8_LRw5WHq0TlShA3wEHEPTAWnc2lfRsGyDP6mQqcLImMe4&currency=USD" data-sdk-integration-source="button-factory"></script>


    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 
    <title>Cart</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">


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

<div class="headers">
  <h1>Oh no! your cart is empty :(</h1>
  <h3>But don't worry, we can fix that!</h3>
  <a id="gallery-btn" href="gallery.php">Go to Gallery</a>
  <a id="diy-btn" href="diy.php">Create personal pottery</a>
</div>

  <div id="empty_state">

  </div>
  <img id="emptycart-svg" src="../icons/undraw_empty_cart_co35.svg" alt="">

</body>
</html>