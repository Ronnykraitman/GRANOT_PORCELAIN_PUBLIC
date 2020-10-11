<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
    <link rel="stylesheet" href="../style/diy.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <script defer src="../scripts/scrollup.js"></script>
    <script defer src="../scripts/price_calculation.js"></script>

  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>DIY</title>
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

  <button class="btn-top" title="Go to top">Top</button>
  <?php $orderID = time(); 
  
  echo '
  
  <form id="form" action="cart.php?action=add&id='.$orderID.'" method="post" enctype="multipart/form-data">

    <section class="first_section" data-aos="zoom-in" data-aos-duration="2000">
        <div class="row" id="diy-row">    
            <div class="col" id="upload-col" > 
              <h1>first thing first</h1>
              <br>
              <h2>if you have a similar image of the pottery you dream about, simply upload it here. if not, just scroll down to the next step</h2>
              <img  id="upload-svg" src="/icons/undraw_going_up_ttm5 (1).svg" alt="">
              <input type="file" name="fileToUpload" id="fileToUpload">
              <br>
            </div>
    </section>

    <section class="second_section" data-aos="zoom-in" data-aos-duration="2000">
        <h1>Select your pottery specifics</h1>
            <div class="row" id="f-row" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500">
                <h2>Select your pottery size</h2>
                <div class="col" id="size-col">
                    <input type="radio" name="pot-size" id="pot-size1" value="Small" required>
                    <label for="pot-size1"><h3>small</h3><img src="https://img.icons8.com/small/24/000000/pottery.png" class="pot-image" id="pot-size1" /></label>
                
                    <input type="radio" name="pot-size" id="pot-size2" value="Medium" required>
                    <label for="pot-size2"><h3>medium</h3><img src="https://img.icons8.com/small/48/000000/pottery.png" class="pot-image" id="pot-size2"/></label>
                
                    <input type="radio" name="pot-size" id="pot-size3" value="Large" required>
                    <label for="pot-size3"><h3>large</h3><img src="https://img.icons8.com/small/96/000000/pottery.png" class="pot-image" id="pot-size3" /></label>
                </div>
            </div>
    
            <div class="row" id="s-row" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="600">
                <div class="col" id="color-col">
                    <h2>Select your pottery color</h2>
                    
                    <input type="radio" name="pot-color" id="pot-color1" value="Red" required>
                    <label for="pot-color1"><h3>red</h3><img src="/icons/colour.png" alt="" class="pot-color-1"></label>
            
                    <input type="radio" name="pot-color" id="pot-color2" value="Green" required>
                    <label for="pot-color2"><h3>green</h3><img src="/icons/colour.png" alt="" class="pot-color-2"></label>
            
                    <input type="radio" name="pot-color" id="pot-color3" value="White" required>
                    <label for="pot-color3"><h3>white</h3><img src="/icons/colour.png" alt="" class="pot-color-3"></label>
            
                    <input type="radio" name="pot-color" id="pot-color4" value="Blue" required>
                    <label for="pot-color4"><h3>blue</h3><img src="/icons/colour.png" alt="" class="pot-color-4"></label>
            
                    <input type="radio" name="pot-color" id="pot-color5" value="Yellow" required>
                    <label for="pot-color5"><h3>yellow</h3><img src="/icons/colour.png" alt="" class="pot-color-5"></label>
          
                </div>
            </div>
    
            <div class="row" id="t-row" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="700">
                <div class="col" id="material-col">
                    <h2>Select your pottery material</h2>
                    <input type="radio" name="pot-materials" id="pot-material1" value="Clay" required>
                    <label for="pot-material1"><h3>Clay</h3><img src="/icons/material.png" alt="" class="pot-material"></label>
            
                    <input type="radio" name="pot-materials" id="pot-material2" value="Glass" required>
                    <label for="pot-material2"><h3>Glass</h3><img src="/icons/material.png" alt="" class="pot-material"></label>
            
                    <input type="radio" name="pot-materials" id="pot-material3" value="Porcelain" required>
                    <label for="pot-material3"><h3>Porcelain</h3><img src="/icons/material.png" alt="" class="pot-material"></label>
                </div>
            </div>        
    </section>

    <section class="third_section" data-aos="zoom-in" data-aos-duration="2000">
        <div class="row" id="diy-row">
            <div class="col" id="finish-col">
              <h1>Finally, checkout</h1>
              <br>
              <br>
              <h2>fantastic! your pottery price is only <span id="total_price">0</span>$</h2>
              <div id="addtocart">
              <input type="submit" value="Add to Cart" name="submit" id="submit">
              </div>
              <img src="/icons/undraw_finish_line_katerina_limpitsouni_xy20.svg" alt="" id="finish-svg" >
            </div>
          </div>
    </section>
</form>
  
  
  ';
  
  
  ?>



    <script>
        AOS.init();
      </script> 
</body>
</html>