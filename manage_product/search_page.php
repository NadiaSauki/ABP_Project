<?php

$conn = mysqli_connect("localhost:3306","root","","shop_db");
if(!$conn)
{
	echo "Database connection faild...";
}

session_start();

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
 
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 
 };
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Bookly.</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/93a36b9820.js" crossorigin="anonymous"></script>
                
        <link rel="stylesheet" type="text/css" href="http://localhost/ABP_Project/css/style.css">
    </head>

    <body>
        <!--  HEADER -->
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="http://localhost/ABP_Project/home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"><h3 style="color: purple;">bookly.</h3>
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="http://localhost/ABP_Project/manage_shop/about.php">About</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_product/shop.php">Product</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_order/order.php">Orders</a></li>
                    </ul>

                    <div class="text-end">
                        <ul>
                            <li><a href="http://localhost/ABP_Project/manage_product/search_page.php"><i class="fas fa-search"></i> Search</a></li>
                            <li><a href="http://localhost/ABP_Project/manage_profile/user_profile.php"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="http://localhost/ABP_Project/manage_cart/add_to_cart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="http://localhost/ABP_Project/logout.php">Sign out</a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </header>

        <!-- -->
        <div class="modal-content rounded-5 shadow">
            <div class ="row py-lg-4">
                <div class ="py-4 text-center container">
                    <h1 class="fw-bold mb-0" style="color: purple;">Search Page</h1>
                    <p><h4 class="fw-light mb-0" style="color: black;"><a href="http://localhost/ABP_Project/home.php">Home</a> /Search</h4></p>
                </div>

                <div class="modal-content rounded-5 shadow">
                    <div class ="row py-lg-4">
                        <div class="search-form">
                            <form action="" method="post">
                                <input type="text" name="search" placeholder="Search Products" class="box">
                                <input type="submit" name="submit" value="Search" class="btn">
                            </form>
                        </div>
                    </div>

                    <div class="products" style="padding-top: 0;">
                        <div class="box-container">
                            <?php
                                if(isset($_POST['submit'])){
                                    $search_item = $_POST['search'];
                                    $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE name LIKE '%{$search_item}%'") or die('query failed');
                                    if(mysqli_num_rows($select_products) > 0){
                                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                            ?>
                            <form action="" method="post" class="box">
                                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" class="image">
                                <div class="name"><?php echo $fetch_product['name']; ?></div>
                                <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
                                <input type="number"  class="qty" name="product_quantity" min="1" value="1">
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                            </form>
                            <?php
                                        }
                                    }else{
                                        echo '<p class="empty">no result found!</p>';
                                    }
                                }else{
                                    echo '<p class="empty">search something!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="p-3 bg-dark text-white">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-3 border-top">
                    <p class="col-md-4 mb-0 text-muted">&copy; BOOKSHOP 2022 | All Rights Reserved </p>

                    <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="http://localhost/ABP_Project/home.php" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="http://localhost/ABP_Project/manage_shop/contact.php" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="http://localhost/ABP_Project/manage_shop/about.php" class="nav-link px-2 text-muted">About</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </body>
</html>