<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GRANOT</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
    <script defer src="./scripts/index.js"></script>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/navbar.css">
    <script defer src="./scripts/scrollup.js"></script>
        <script defer src="./scripts/transition.js"></script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- animsition.css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
</head>


<body class="animsition">


    <!--scroll bar-->
    <div id="progressbar"></div>
    <div id="scrollpath"></div>
    <!--scroll bar-->

        <!--nav bar-->
        <nav role="navigation" id="mynav">
            <div id="menuToggle">
              <input type="checkbox" />
              <span></span>
              <span></span>
              <span></span>
              <ul id="menu">
                <a href="#hero">
                  <li>Home</li>
                </a>
                <a href="#about">
                  <li>About</li>
                </a>
                <a href="./pages/explore.php" class="animsition-link">
                  <li >Explore</li>
                </a>
                <a href="./pages/contact.php" class="animsition-link">
                  <li>Contact</li>  
                </a>
                <a href="./pages/social.php" class="animsition-link">
                  <li>Social</li>
                </a>
                  <a href="./pages/cart.php">
                  <li><i id="cart_btn" class="fa fa-shopping-basket"></i><?php echo $_SESSION['overall_quantity']?></li>
                    </a>
              </ul>
            </div>
          </nav>
        <!--nav bar-->
        
        <button class="btn-top" title="Go to top">Top</button>



        <section class="hero" id="hero">
            <div id="home-video-cover"></div>
            <video autoplay muted loop id="home-video"> 
                <source src="./videos/herovid.mp4" type="video/mp4">
            </video>
            <div class="container-fluid">
                <div class="row" id="headline">
                    <div class="col" id="headline-col">
                        <h1 data-aos="zoom-out" data-aos-duration="2000">Granot porcelain</h1>
                    </div>
                </div>

                <div class="row" id="subheadline">
                    <div class="col" id="subheadline-col">
                        <h1 data-aos="zoom-out" data-aos-duration="2000">High quality handmade pottery</h1>
                    </div>
                </div>

                <div class="row" id="hero-btn">
                    <div class="col" id="hero-btn-col" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#about">discover</a>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="about" id="about">
            <div class="container-fluid">
                <div class="about-container">
                    <div class="row" id="about-headline">
                        <div class="col" id="about-headline-col">
                            <h1><span data-aos="zoom-out-right"  data-aos-delay="100">this </span><span data-aos="zoom-out-right" data-aos-delay="200">is </span><span data-aos="zoom-out-right" data-aos-delay="300">our </span><span data-aos="zoom-out-right" data-aos-delay="400"> story </span></h1>
                        </div>
                    </div>

                    <div class="svg-about">
                        <img  data-aos="fade-right"  data-aos-delay="500" data-aos-duration="2000" src="./icons/undraw_walking_outside_5ueb copy.svg"  alt="">
                    </div>

                    <div class="row" id="about-p" >
                        <div class="col" id="about-p-col">
        
                            <div id="about-card-1">
                                   
                                    <p >
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="100" data-aos-duration="2000">
                                        Eitan Granot 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="200" data-aos-duration="2000">
                                        holds a 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="300" data-aos-duration="2000">
                                        Masters degree in 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="400" data-aos-duration="2000">
                                        Chemistry and 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="500" data-aos-duration="2000">
                                        has worked as an Engineer for 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="600" data-aos-duration="2000">
                                        the past 8 years.
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="700" data-aos-duration="2000">
                                        However, he was  
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="800" data-aos-duration="2000">
                                        always passionate 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="900" data-aos-duration="2000">
                                        about crafts.  
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="950" data-aos-duration="2000">
                                        Eitan took his passion 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="1000" data-aos-duration="2000">
                                        and entrepreneurship 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="1100" data-aos-duration="2000">
                                        to the next level - 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="1200" data-aos-duration="2000">
                                        establishing 
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="1300" data-aos-duration="2000">
                                        “Granot Porcelain”
                                    </span>
                                    <span id="about-card-1-word" data-aos="zoom-out-right"  data-aos-delay="1400" data-aos-duration="2000">
                                        in 2019 
                                    </span>         
                                    </p>
                            </div>

                            <div id="about-card-2">
                                    <p>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="1600" data-aos-duration="2000">
                                            This business is 
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="1700" data-aos-duration="2000">
                                            focusing on
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="1800" data-aos-duration="2000">
                                            pottery 
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="1900" data-aos-duration="2000">
                                            and all items   
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="2000" data-aos-duration="2000">
                                            are hand made 
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="2100" data-aos-duration="2000">
                                            by the   
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="2150" data-aos-duration="2000">
                                            artist 
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="2200" data-aos-duration="2000">
                                            in a Tel Aviv 
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="2250" data-aos-duration="2000">
                                            ceramics 
                                        </span>
                                        <span id="about-card-2-word" data-aos="zoom-out-right"  data-aos-delay="2300" data-aos-duration="2000">
                                            studio
                                        </span>
      
                                    </p>
                            </div>

                            <div id="about-card-3">
                                    <p>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2400" data-aos-duration="2000">
                                            Eitan’s 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2450" data-aos-duration="2000">
                                            variety of pottery 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2500" data-aos-duration="2000">
                                            or creations 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2550" data-aos-duration="2000">
                                            based on a  
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2600" data-aos-duration="2000">
                                            custom 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2650" data-aos-duration="2000">
                                            design
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2700" data-aos-duration="2000">
                                            request 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2750" data-aos-duration="2000">
                                            will make 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2800" data-aos-duration="2000">
                                            a perfect 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2850" data-aos-duration="2000">
                                            gift 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2900" data-aos-duration="2000">
                                            for your 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="2950" data-aos-duration="2000">
                                            loved 
                                        </span>
                                        <span id="about-card-3-word" data-aos="zoom-out-right"  data-aos-delay="3000" data-aos-duration="2000">
                                            ones
                                        </span>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>