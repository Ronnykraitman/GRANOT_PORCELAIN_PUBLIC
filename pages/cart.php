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
//$sql1 = "SELECT * FROM pots;";
//$result = mysqli_query($conn,$sql1);

if(isset($_GET["action"])){
  if($_GET["action"] == "delete"){
    foreach($_SESSION["shopping_cart"] as $keys => $values){
      if($values["item_id"] == $_GET["id"]){
        unset($_SESSION["shopping_cart"][$keys]);
        $_SESSION['overall_quantity'] = $_SESSION['overall_quantity'] - $values['item_quantity'];
      }
    }
  }

  if($_GET["action"] == "increase"){
    $i=0;
    $is_personal = false;
      foreach($_SESSION["shopping_cart"] as $key=>$value){
        if($value['item_id'] == $_GET["id"]){
          $id = $_GET["id"];
          $sql1 = "SELECT stock FROM pots WHERE pots.pot_id = '$id';";
          $result = mysqli_query($conn,$sql1);
          if ($result->num_rows > 0) {
            $is_personal = true;
            while($row = $result->fetch_assoc()) {
              if($value['item_quantity'] < $row['stock']){
                $newq = $value['item_quantity'] + 1;
                $_SESSION['overall_quantity'] = $_SESSION['overall_quantity'] +1;
                $_SESSION["shopping_cart"][$i]['item_quantity'] = $newq;
              }
            } 
          }else{
            if($value['item_quantity'] < 100){
              $newq = $value['item_quantity'] + 1;
              $_SESSION['overall_quantity'] = $_SESSION['overall_quantity'] +1;
              $_SESSION["shopping_cart"][$i]['item_quantity'] = $newq;
            }
          }
        }
        $i++;
      } 
    }
    if($_GET["action"] == "decrease"){
      $i=0;
        foreach($_SESSION["shopping_cart"] as $key=>$value){
          if($value['item_id'] == $_GET["id"]){
            if($value['item_quantity'] > 1){
              $newq = $value['item_quantity'] - 1;
              $_SESSION['overall_quantity'] = $_SESSION['overall_quantity'] - 1;
              $_SESSION["shopping_cart"][$i]['item_quantity'] = $newq;
            }
          }
          $i++;
        } 
      }

}





if(isset($_POST['Next'])){
  $client_array = array(
    'client_name' => $_POST["fname"],
    'client_email' => $_POST["femail"],
    'client_phone' => $_POST["fphone"],
    'client_country' => $_POST["fcountry"],
    'client_address' => $_POST["faddress"],
    'client_zip' => $_POST["fZIP"],
  );
  $_SESSION["client_details"][0] = $client_array;
}


if(isset($_POST['submit'])){
  $_SESSION["overall_quantity"]  = $_SESSION["overall_quantity"] + 1;
  $price = 0;
  $img = $_FILES['fileToUpload'];
  $imgName = $_GET["id"];
  $imgTmpName = $img['tmp_name'];
  $destination = '../Personal_pottery/';
  move_uploaded_file($imgTmpName,$destination.$imgName);
  $size = $_POST['pot-size'];
  $color = $_POST['pot-color'];
  $material = $_POST['pot-materials'];
  if($size == "Small"){
    $price = $price + 10;
  }
  if($size == "Medium"){
    $price = $price + 12;
  }
  if($size == "Large"){
    $price = $price + 15;
  }
  if($color == "Red" || $color == "Green" || $color == "White" || $color == "Blue" || $color == "Yellow"){
    $price = $price + 5;
  }else{
    $price = $price + 7;
  }
  if($material == "Clay"){
    $price = $price + 10;
  }
  if($material == "Glass"){
    $price = $price + 12;
  }
  if($material == "Porcelain"){
    $price = $price + 15;
  }
  if(isset($_SESSION["shopping_cart"])){
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"],$item_array_id)){
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id' => $_GET["id"],
        'item_name' => "Personal Pottery",
        'item_quantity' => 1,
        'item_price' => $price,
        'item_size' => $size,
        'item_color' => $color,
        'item_material' => $material
      );
      $_SESSION["shopping_cart"][$count] = $item_array;
    }
  }
  else{
    $item_array = array(
      'item_id' => $_GET["id"],
      'item_name' => "Personal Pottery",
      'item_quantity' => 1,
      'item_price' => $price,
      'item_size' => $size,
      'item_color' => $color,
      'item_material' => $material
    );
    $_SESSION["shopping_cart"][0] = $item_array;
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
   
    <link rel="stylesheet" href="../style/cart.css">
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

<section id="cart_section">
<video autoplay muted loop id="home-video"> 
  <source src="../videos/herovid.mp4" type="video/mp4">
  </video>
<?php




if(!empty($_SESSION["shopping_cart"])){
echo'<h1>What an amazing cart!</h1>';
}
?>
<div class="table-responsive">
    
    <?php
        if(!empty($_SESSION["shopping_cart"])){
          echo '
          <table class="table table-border">
          <tr>
            <th width="40%">Item name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>';
          $total = 0;
          foreach($_SESSION["shopping_cart"] as $key=>$value)
          {
            ?>
            <tr>
              <?php
              if($value['item_name'] == "Personal Pottery"){
                echo '<td> <a id="item_link" href="#">Personal pottery</a></td>';
              }
              else{
                echo '<td> <a id="item_link" href="http://michalgh.mtacloud.co.il/pages/productpage.php?pid='.$value["item_id"].'">'.$value["item_name"].'</a></td>';

              }
              ?>
              <td>
              <a id="plus" href="cart.php?action=decrease&id=<?php echo $value["item_id"];?>">-</a>    
              <?php echo $value["item_quantity"];?>
              <a id="minus"href="cart.php?action=increase&id=<?php echo $value["item_id"];?>">+</a>  
            </td>
              <td>$<?php echo $value["item_price"];?></td>
              <td><?php echo number_format($value["item_quantity"]*$value["item_price"], 2);?></td>
              <td> <a href="cart.php?action=delete&id=<?php echo $value["item_id"];?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
              $total = $total + ($value["item_quantity"]*$value["item_price"]);
          }
          ?>
            <tr>
              <td id="total_price">Total: $ <?php echo number_format($total,2);?></td>
            </tr>

          <?php
        }
        else{
          echo '
          <script>window.location="empty_cart.php";</script>
          ';
        }
        ?>
      </table>
  </div>
</section>

<section id="between1">
</section>

<section id="details_section">
<?php
  if(!empty($_SESSION["shopping_cart"])){
    echo'
    <h2>Now that you have reviewed your cart, please fill your details</h2>
    <div id="details">
    <form id="client_form" method="post" action="cart.php#paypal_section">
    <input type="text" name="fname" placeholder="Full Name" required><br>
    <input type="email" name="femail" placeholder="Email" required><br>
    <input type="tel" name="fphone" placeholder="Phone" title="Phone Number" required><br>
    <input type="text" name="fcountry" placeholder="Country" required><br>
    <input type="text" name="faddress" placeholder="Address" required><br>
    <input type="number" name="fZIP" placeholder="Zip code" required><br>
    <button id="submit_form" type="submit" name="Next">Continue for checkout</button><br>
    </form>
    </div>

    ';
  }
?>
</section>
<section id="between2">
</section>
<section id="paypal_section">

<?php
if(isset($_POST['Next'])){
  if(!empty($_SESSION["shopping_cart"])){
    ?>
     <div class="row" id="paypal_div">
            <div id="paypal-button-container"></div>
            <script>
            paypal.Buttons({
              style: {
                  shape: "pill",
                  color: "blue",
                  layout: "vertical",
                  label: "paypal",
                  
              },
              createOrder: function(data, actions) {
                  return actions.order.create({
                      purchase_units: [{
                          amount: {
                              value: '<?php echo $total ?>'
                          }
                      }]
                  });
              },
              onApprove: function(data, actions) {
                  return actions.order.capture().then(function(details) {
                    window.location="success.php";
  
                  }); 
              }
            }).render("#paypal-button-container");
            </script>
            </div>
            </div>
    <?php
    }
    
}
?>
</section>

<script defer>
      let video = document.querySelector('video');
      video.playbackRate = 0.5;
    </script>
</body>
</html>