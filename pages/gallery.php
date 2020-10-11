<?php
    $servername = "localhost";
    $username = "michalgh_michalg";
    $password = "sadna2020";
    $dbname = "michalgh_Granot-pots";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
//$conn = mysqli_connect($servername,$username,$password,$dbname)
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 



session_start();
$sql1 = "SELECT * FROM pots;";
$result = mysqli_query($conn,$sql1);

$_SESSION['overall_quantity'];
$overall_quantity = $_SESSION['overall_quantity'];
if(isset($_POST['add_to_cart'])){
  $overall_quantity = $overall_quantity + $_POST["quantity"];
  if(isset($_SESSION["shopping_cart"])){
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"],$item_array_id)){
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][$count] = $item_array;
      $_SESSION['overall_quantity'] = $overall_quantity;
      echo '<script>window.location="gallery.php"</script>';
    }
    else{
      $i=0;
      foreach($_SESSION["shopping_cart"] as $key=>$value){
        if($value['item_id'] == $_GET["id"]){
          $_SESSION['overall_quantity'] = $_SESSION['overall_quantity'] - $value['item_quantity'];
          $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
          );
          $_SESSION["shopping_cart"][$i] = $item_array;
          $_SESSION['overall_quantity'] = $_SESSION['overall_quantity'] + $_POST["quantity"];


        }
        $i++;
      }
      echo '<script>window.location="gallery.php"</script>';
    }
  }
  else{
    $item_array = array(
      'item_id' => $_GET["id"],
      'item_name' => $_POST["hidden_name"],
      'item_price' => $_POST["hidden_price"],
      'item_quantity' => $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
    $_SESSION['overall_quantity'] = $overall_quantity;
  }
}

?>


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
   
    <link rel="stylesheet" href="../style/gallery.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <script defer src="../scripts/scrollup.js"></script>
    <script defer src="../scripts/emptyq.js"></script>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 
    <title>Gallery</title>
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


<h1>the collection</h1>
    <div class="products-grid">
        <div class="container">
          <div class="row">
            <?php
            $counter=0;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  if($row['stock'] <= 0)
                  {
                    echo '
                    <div class="col-md-3">
                    <div class="product">
                        <div class="product-image">
                        <form name="a2c_form" id="gallery_actions" method="post" action="gallery.php?action=add&id='.$row['pot_id'].'" onsubmit="return validateForm()">
                        <input type="hidden" name="hidden_name" value = '.$row['name'].'>
                        <input type="hidden" name="hidden_id" value = '.$row['pot_id'].'>
                        <input type="hidden" name="hidden_price" value = '.$row['price'].'>
                        <a class="image"><img src="../products/'.$row['img'].'"alt=""></a>
                        <span id="out_of_stock" class="product-name">Out of stock</span>
                        <div class="price">'.$row['price'].'$</div>
                        <input id="quantity_form" type="number" name="quantity" value = 1 min="1" max='.$row['stock'].' disabled>
                        <button id="submit_form" type="submit" name="add_to_cart" disabled>
                        <i class="fa fa-shopping-cart"></i>
                        </button>
                       </form>
                       <ul class="product-links">
                       <li><a href="productpage.php?pid='.$row['pot_id'].'"onclick="myFunction("'.$row['pot_id'].'")"><i class="fa fa-search"></i></a></li>
                          </ul>
                   </div>
                </div>
              </div>';
                  }
                  else{
                    {
                      echo '
                      <div class="col-md-3">
                          <div class="product">
                              <div class="product-image">
                              <form name="a2c_form" id="gallery_actions" method="post" action="gallery.php?action=add&id='.$row['pot_id'].'" onsubmit="return validateForm()">
                              <input type="hidden" name="hidden_name" value = '.$row['name'].'>
                              <input type="hidden" name="hidden_id" value = '.$row['pot_id'].'>
                              <input type="hidden" name="hidden_price" value = '.$row['price'].'>
                              <a class="image"><img src="../products/'.$row['img'].'"alt=""></a>';
                              if($_SESSION["shopping_cart"]){
                                $is_in_cart = false;
                                foreach($_SESSION["shopping_cart"] as $key=>$value){
                                    if($value['item_id'] == $row['pot_id']){
                                    echo'<span id="in_cart" class="product-name">In Your Cart</span>';
                                    $is_in_cart = true;
                                  }else{
                                    if(!$is_in_cart){
                                      echo' <span id="pname" class="product-name">'.$row['name'].'</span>';
                                    }
                                  }
                                }
                              }else{
                                echo' <span id="pname" class="product-name">'.$row['name'].'</span>';
                              }  
                              echo'
                              <div class="price">'.$row['price'].'$</div>
                              <input id="quantity_form" type="number" name="quantity" value = 1 min="1" max='.$row['stock'].'>
                              <button id="submit_form" type="submit" name="add_to_cart">
                              <i class="fa fa-shopping-cart"></i>
                              </button>
                             </form>
                             <ul class="product-links">
                             <li><a href="productpage.php?pid='.$row['pot_id'].'"onclick="myFunction("'.$row['pot_id'].'")"><i class="fa fa-search"></i></a></li>
                                </ul>
                         </div>
                      </div>
                    </div>';
                    }
                  }

              }
            }
            ?>
          </div>
        </div>
    </div>

</body>
</html>
