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

class ArrayValue implements JsonSerializable {
    public function __construct(array $array) {
        $this->array = $array;
    }

    public function jsonSerialize() {
        return $this->array;
    }
}



foreach($_SESSION["shopping_cart"] as $key=>$value){
  $purcahseQuantity = $value['item_quantity'];
  $id = $value["item_id"];

  if($value["item_name"] != "Personal Pottery"){
    $transaction_items[] = array(
        'item_id' => $id,
        'item_quantity' => $purcahseQuantity,
      );
      $sql1 = "SELECT stock FROM pots WHERE pots.pot_id = '$id';";  
      $currentQuantityQuery = mysqli_query($conn,$sql1);
      $currentstock = mysqli_fetch_row($currentQuantityQuery);
      $newQuantity = $currentstock[0] - $purcahseQuantity;
      $sql2="UPDATE pots SET stock = '$newQuantity' WHERE pots.pot_id = '$id';";
      mysqli_query($conn,$sql2);
  }else{
    $transaction_items[] = array(
        'item_id' => $id,
        'size' => $value['item_size'],
        'color' => $value['item_color'],
        "material" => $value['item_material']
      );
  }
  unset($_SESSION['shopping_cart']);
  unset($_SESSION['overall_quantity']);

}

$result = array(
    'items' => $transaction_items
);

$json = json_encode($result, JSON_PRETTY_PRINT);

foreach($_SESSION["client_details"] as $key=>$value){
$name = $value['client_name'];
$email = $value['client_email'];
$phone = $value['client_phone'];
$address = $value['client_address'];
$country = $value['client_country'];
$zip = $value['client_zip'];
$orderid = time();
$sql = "INSERT INTO orders (order_id, order_details ,name, email,phone,country,address,zip) VALUES ('$orderid', '$json', '$name' , '$email', '$phone',  '$country', '$address', '$zip');";
mysqli_query($conn,$sql);
unset($_SESSION['client_details']);
}


?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="../style/success.css">
    <link rel="stylesheet" href="../style/navbar.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




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

<?php
echo'
  <div class="headline">
    <h1>THANK YOU!</h1>
  </div>

<div class="text">
    <p>Your amazing pottrey will be delivered soon :)</p>
    <br>
    <p>Your order ID is: '.$orderid.'</p>
    <br>
    <p>In the meantime, go back to our <a href="../index.php"> Homepage</a></p>
</div>
    
    <div class="svg">
        <img src="../icons/undraw_successful_purchase_uyin.svg" alt="">
    </div>';
?>
</body>
</html>


