<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script defer src="../scripts/adminpass.js"></script>

   
    <link rel="stylesheet" href="../style/admin.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <link href="https://fonts.googleapis.com/css?family=Bangers|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Poppins|Indie+Flower|Passion+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <button id="admin_logout" style="opacity:0">Logout</button>



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
        <a href="admin.php">
          <li>Admin</li>
        </a>
        <a href="cart.php">
           <li><i class="fa fa-shopping-basket"></i></li>
        </a>
      </ul>
    </div>
  </nav>
<h1 id="header" style="opacity:0">welcome eitan</h1>
    <h2 id="sub_header" style="opacity:0">Here is your current inventory</h2>

  <?php
    $servername = "localhost";
    $username = "michalgh_michalg";
    $password = "sadna2020";
    $dbname = "michalgh_Granot-pots";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql1 = "SELECT * FROM pots;";
  $result = mysqli_query($conn,$sql1);
    

    
    ?>

    <div class="lock" id="lock">
        <img src="../icons/undraw_security_o890.svg" alt="">
    </div>

    <section id="existing_products" style="opacity:0">
    <div class="products">
    <?php
          echo '
          <table class="table_of_products">
          <tr>
          <th width="30%">IMG</th>
            <th width="5%">ID</th>
            <th width="10%">Name</th>
            <th width="20%">Desc</th>
            <th width="5%">Quantity</th>
            <th width="5%">Price</th>
            <th width="5%">Color</th>
            <th width="5%">Material</th>
            <th width="5%">Size</th>
          </tr>';
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo '<img id="pimg" src="../products/'.$row['img'].'"';?></td>
              <td><?php echo $row["pot_id"];?></td>
              <td><?php echo $row["name"];?></td>
              <td><?php echo $row["description"];?></td>
              <td><?php echo $row["stock"];?></td>
              <td><?php echo $row["price"];?></td>
              <td><?php echo $row["color"];?></td>
              <td><?php echo $row["material"];?></td>
              <td><?php echo $row["size"];?></td>
            </tr>
            <?php
          }
        }
          ?>
      </table>
    </div>
    </section>

    <section id="options_section" style="opacity:0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
          <h3 id="options_header" style="opacity:0">Available actions</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3" id="add">
            <h3>Add New Pottery</h3>
            <form name="addform" id="add_form" action="" method="POST" enctype="multipart/form-data" onsubmit="return addValidate()">
            <input type="text" name="id" placeholder="Pottery ID" required>
            <br>
            <input type="text" name="name" placeholder="Pottery Name" required>
            <br>
            <input type="text" name="desc" placeholder="Pottery Description" required>
            <br>
            <input type="number" name="price" placeholder="Pottery Price" required step=".01" min="1">
            <br>
            <input type="number" name="stock" placeholder="Quantity" required min="1">
            <br>
            <input type="text" name="color" placeholder="Pottery Color" required>
            <br>
            <input type="text" name="material" placeholder="Pottery Material" required>
            <br>
            <input type="text" name="size" placeholder="Pottery Size" required>
            <br>
            <input id="add_img" type="file" name="img" placeholder="Pottery Image" required>
            <br>
            <input id="add_submit" type="submit" value="Add" name="add">
            </form>
          </div>

          <div class="col-md-3" id="update">
          <h3>Update Pottery</h3>
        <form id="update_form" name="updateform" action="admin.php" method="POST"  enctype="multipart/form-data" onsubmit="return updateValidate()">

          <select name="id" placeholder="Pottery ID" required>
          <?php
            $sql1 = "SELECT * FROM pots;";
            $result = mysqli_query($conn,$sql1);
            if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo'<option value="'.$row['pot_id'].'">'.$row['pot_id'].'</option>';
              }
            }
          ?>
          </select>
          <br>
          <br>
          <input type="text" name="name" placeholder="Pottery Name">
          <br>
           <input type="text" name="desc" placeholder="Pottery Description">
          <br>
           <input type="number" name="price" placeholder="Pottery Price" step=".01" min="1">
          <br>
          <input type="number" name="stock" placeholder="Quantity" min="1">
          <br>
          <input type="text" name="color" placeholder="Pottery Color">
          <br>
          <input type="text" name="material" placeholder="Pottery Material">
          <br>
          <input type="text" name="size" placeholder="Pottery Size">
          <br>
          <input id="update_img" type="file" name="img" placeholder="Pottery Image">
          <br>
          <label  for=""><input id="update_submit" type="submit" value="Update" name = "update"></label>
        </form>
          </div>

          <div class="col-md-3" id="remove">
          <h3>Delete Pottery</h3>
        <form id="remove_form" name="removeform" action="" method="POST" id="remove_form" onsubmit="return confirm('Are you sure you want to delete this pot for ever and ever?');">
        <select name="id" placeholder="Pottery ID" required>
          <?php 
            $sql1 = "SELECT * FROM pots;";
            $result = mysqli_query($conn,$sql1);
            if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo'<option value="'.$row['pot_id'].'">'.$row['pot_id'].'</option>';
              }
            }
          ?>
          </select>
          <br>
          <label for=""><input id="remove_submit" type="submit" value="Remove" name="remove" required></label >
        </form>
          </div>
        </div>
      </div>

    </section>
    



</body>
</html>

<?php

if(isset($_POST['add'])) {

  $sql1 = "SELECT pot_id FROM pots;";
  $result = mysqli_query($conn,$sql1);
  $is_unique_id = true;
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if($row['pot_id'] == $_POST['id'])
    $is_unique_id = false;
    }
  }
  if($is_unique_id){
    if(empty($_POST['id']))
        echo "Missing ID";
    if(empty($_POST['name']))
      echo "Missing name";
    if(empty($_POST['desc']))
      echo "Missing description";
    if(empty($_POST['price']))
      echo "Missing price";
    if(empty($_POST['stock']))
      echo "Missing stock";
    if(empty($_POST['color']))
      echo "Missing color";
    if(empty($_POST['material']))
      echo "Missing material";
    if(empty($_POST['size']))
      echo "Missing size";
      if(empty($_FILES['img']))
      echo "Missing img";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $color = $_POST['color'];
    $material = $_POST['material'];
    $size = $_POST['size'];
    $img = $_FILES['img'];
    $imgName = $img['name'];
    $imgTmpName = $img['tmp_name'];
    $destination = '../products/';
    move_uploaded_file($imgTmpName,$destination.$imgName);
    $sql = "INSERT INTO pots (id, pot_id, name, description,stock,price,color,material,size,img) VALUES (NULL, '$id', '$name', '$desc' , '$stock', '$price',  '$color', '$material', '$size', '$imgName');";
    $add_new_pot = mysqli_query($conn,$sql);
    if($add_new_pot){
      echo '<script> alert("New pottery has been added successfully") </script>';
      echo '<script>window.location.href="admin.php";</script>';
    }
  }
  else{
    echo '<script> alert("FAILED to add pottery. ID must be unique") </script>';
  }
}

if(isset($_POST['update'])) {
  $is_updated = true;
    
    if(empty($_POST['id'])){
        echo "Missing ID";
    }
    else{
      $id = $_POST['id'];

      if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $sql3="UPDATE pots SET name = '$name' WHERE pots.pot_id = '$id';";
        $update_pottery1_1 = mysqli_query($conn,$sql3);
        if(!$update_pottery1_1){
          $is_updated = false;
        }
      }

      if(!empty($_POST['desc'])){
        $desc = $_POST['desc'];
        $sql3="UPDATE pots SET description = '$desc' WHERE pots.pot_id = '$id';";
        $update_pottery2_2 = mysqli_query($conn,$sql3);
        if(!$update_pottery2_2){
          $is_updated = false;
        }
      }

  
      if(!empty($_POST['stock'])){
        $stock = $_POST['stock'];
        $sql3="UPDATE pots SET stock = '$stock' WHERE pots.pot_id = '$id';";
        $update_pottery3_3 = mysqli_query($conn,$sql3);
        if(!$update_pottery3_3){
          $is_updated = false;
        }

      }
  
      if(!empty($_POST['price'])){
        $price = $_POST['price'];
        $sql3="UPDATE pots SET price = '$price' WHERE pots.pot_id = '$id';";
        $update_pottery4_4 = mysqli_query($conn,$sql3);
        if(!$update_pottery4_4){
          $is_updated = false;
        }
      }


      if(!empty($_POST['color'])){
        $color = $_POST['color'];
        $sql3="UPDATE pots SET color = '$color' WHERE pots.pot_id = '$id';";
        $update_pottery5_5 = mysqli_query($conn,$sql3);
        if(!$update_pottery5_5){
          $is_updated = false;
        }
      }

      if(!empty($_POST['material'])){
        $material = $_POST['material'];
        $sql3="UPDATE pots SET material = '$material' WHERE pots.pot_id = '$id';";
        $update_pottery6_6 = mysqli_query($conn,$sql3);
        if(!$update_pottery6_6){
          $is_updated = false;
        }
  
      }
 
      if(!empty($_POST['size'])){
        $size = $_POST['size'];
        $sql3="UPDATE pots SET size = '$size' WHERE pots.pot_id = '$id';";
        $update_pottery7_7 = mysqli_query($conn,$sql3);
        if(!$update_pottery7_7){
          $is_updated = false;
        }
 
      }

      if(!$_FILES['img']['size'] == 0){
        $img = $_FILES['img'];
        $imgName = $img['name'];
        $imgTmpName = $img['tmp_name'];
        $destination = '../products/';
        move_uploaded_file($imgTmpName,$destination.$imgName);
        $sql3="UPDATE pots SET img = '$imgName' WHERE pots.pot_id = '$id';";
        $update_pottery8_8 = mysqli_query($conn,$sql3);
        if(!$update_pottery8_8){
          $is_updated = false;
        }

      }   
      if($is_updated){
        echo '<script> alert("Pottery has been updated") </script>';
        echo '<script>window.location.href="admin.php";</script>';
      }
      else{
        echo '<script> alert("FAILED to update. Try again") </script>';
        echo '<script>window.location.href="admin.php";</script>';
      }
    }
} 

if(isset($_POST['remove'])) {
  
    if(empty($_POST['id']))
        echo "Missing ID";
    $id = $_POST['id'];
    $sql = "DELETE FROM pots WHERE pots.pot_id = '$id';";
    $remove_pottery = mysqli_query($conn,$sql);
    if($remove_pottery){
      echo '<script> alert("Pottery has been deleted") </script>';
      echo '<script>window.location.href="admin.php";</script>';
    }
} 
?>