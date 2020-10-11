<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Social</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script defer src="../scripts/swup.js"></script>
  

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../style/social.css">
    <link rel="stylesheet" href="../style/navbar.css">
 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 
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


  <section id="social-section" class="social">
    <div class="banner">
        <video autoplay muted loop data-aos="zoom-in" data-aos-duration="3000">
            <source src="../videos/social.mp4" type="video/mp4">
        </video>
        <a href="https://www.facebook.com" target="_blank"><i id="ficon" class="fa fa-facebook" aria-hidden="true" data-aos="flip-left" data-aos-duration="2000"></i></a>
        <a href="https://www.youtube.com"  target="_blank"><i id="yicon"class="fa fa-youtube-play" aria-hidden="true" data-aos="flip-up" data-aos-duration="2000"></i></a>
        <a href="https://www.twitter.com"  target="_blank"><i id="ticon" class="fa fa-twitter" aria-hidden="true" data-aos="flip-down" data-aos-duration="2000"></i></a>
        <a href="https://www.instagram.com"  target="_blank"><i id="iicon" class="fa fa-instagram" aria-hidden="true" data-aos="flip-right" data-aos-duration="2000"></i></a>
    </div>
    </section>

    <script >AOS.init();</script>

</body>
</html>