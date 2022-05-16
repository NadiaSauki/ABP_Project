<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   $Receiver_Name = mysqli_real_escape_string($conn, $_POST['name']);
   $Number = $_POST['number'];
   $Email = mysqli_real_escape_string($conn, $_POST['email']);
   $Method = mysqli_real_escape_string($conn, $_POST['method']);
   $Shipping_Address = mysqli_real_escape_string($conn, 'House no. '. $_POST['flat'].', '. $_POST['street'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['postcode']);
   $Issues_On = date('d-M-Y');

   $Cart_total = 0;
   $Cart_products[] = '';

   $Cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($Cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($Cart_query)){
         $Cart_products[] = $Cart_item['name'].' ('.$Cart_item['quantity'].') ';
         $Sub_total = ($Cart_item['price'] * $Cart_item['quantity']);
         $Cart_total += $Sub_total;
      }
   }

   $Total_products = implode(', ',$Cart_products);

   $Order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$Receiver_Name' AND number = '$Number' AND email = '$Email' AND method = '$Method' AND address = '$Shipping_Address' AND total_products = '$Total_products' AND total_price = '$Cart_total'") or die('query failed');

   if($Cart_total == 0){
      $message[] = 'your cart is empty';
   }else{
      if(mysqli_num_rows($order_query) > 0){
         $message[] = 'order already placed!'; 
      }else{
         mysqli_query($conn, "INSERT INTO `orders`(user_id, Receiver_Name, Number, Email, Method, Shipping_Address, Total_products, Total_price, Issues_On) VALUES('$user_id', '$Receive_Name', '$Number', '$Email', '$Method', '$Shipping_Address', '$Total_products', '$Cart_total', '$Issues_on')") or die('query failed');
         $message[] = 'order placed successfully!';
         mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      }
   }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Checkout</h3>
   <p> <a href="home.php">Home</a> / Checkout </p>
</div>

<section class="display-order">

   <?php  
      $grand_total = 0;
      $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_cart) > 0){
         while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
   ?>
   <p> <?php echo $fetch_cart['name']; ?> <span>(<?php echo '$'.$fetch_cart['price'].'/-'.' x '. $fetch_cart['quantity']; ?>)</span> </p>
   <?php
      }
   }else{
      echo '<p class="empty">your cart is empty</p>';
   }
   ?>
   <div class="grand-total"> grand total : <span>$<?php echo $grand_total; ?>/-</span> </div>

</section>

<section class="checkout">

   <form action="" method="post">
      <h3>Place Your Order</h3>
      <div class="flex">
         <div class="inputBox">
            <span>Receiver Name :</span>
            <input type="text" name="name" required placeholder="Enter Your Name">
         </div>
         <div class="inputBox">
            <span>Number :</span>
            <input type="number" name="number" required placeholder="Enter Your Number">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" name="email" required placeholder="Enter Your Email">
         </div>
         <div class="inputBox">
            <span>Payment Method :</span>
            <select name="method">
               <option value="cash on delivery">Cash On Delivery</option>
               <option value="credit card">Credit Card</option>
               <option value="paypal">Paypal</option>
               <option value="apple pay">Apple Pay</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Shipping Address :</span>
            <input type="number" min="0" name="flat" required placeholder="e.g. House No.">
         </div>
         <div class="inputBox">
            <span>Shipping Address :</span>
            <input type="text" name="street" required placeholder="e.g. Street Name">
         </div>
         <div class="inputBox">
            <span>City :</span>
            <input type="text" name="city" required placeholder="e.g. Kuantan">
         </div>
         <div class="inputBox">
            <span>State :</span>
            <input type="text" name="state" required placeholder="e.g. Pahang">
         </div>
         <div class="inputBox">
            <span>Country :</span>
            <input type="text" name="country" required placeholder="e.g. Malaysia">
         </div>
         <div class="inputBox">
            <span>Postcode :</span>
            <input type="number" min="0" name="postcode" required placeholder="e.g. 123456">
         </div>
      </div>
      <input type="submit" value="order now" class="btn" name="order_btn">
   </form>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>