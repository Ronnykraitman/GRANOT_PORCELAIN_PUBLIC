<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
  <link rel="stylesheet" href="../style/contact.css">
  <link rel="stylesheet" href="../style/navbar.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="../animsition-master/dist/css/animsition.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
  <script src="../animsition-master/dist/js/animsition.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>


<body >

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

  <section class="contact" id="contact">

    <div class="container-fluid">
        <div class="svg-contact">
            <img data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000" src="../icons/undraw_contact_us_15o2.svg" alt="">
        </div>
        <div class="row" id="contact-headline" data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="200"
        data-aos-duration="900">
            <div class="col" id="contact-headline-col">
                <h1>Let's get in touch</h1>
            </div>
        </div>
        <div class="row" id="contact-details">
            <div class="col" id="contact-details-col" >
                <div class="info">
                    <div id="phone" data-aos="zoom-in"  data-aos-delay="1000" data-aos-duration="2000">
                        <h3>Want to hear my voice? call</h3>
                        <a href="tel: 054-888888">054-888888</a>
                    </div>
                    <div id="email" data-aos="zoom-in"  data-aos-delay="1000" data-aos-duration="2000">
                        <h3>Want to be formal? send an email</h3>
                        <a href="mailto:email@gamail.com">granot@gmail.com</a>
                    </div>
                    <div id="location" data-aos="zoom-in"  data-aos-delay="1000" data-aos-duration="2000">
                        <h3>Want to see me? visit my place </h3>
                        <a href="https://www.google.com/maps" target="_blank">Granot's place, 123 Rothschild blvd, Tel-Aviv </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  AOS.init();
</script> 


</body>
</html>