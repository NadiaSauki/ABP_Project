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

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

    if(mysqli_num_rows ($check_cart_numbers) > 0){
        $message[] = 'Already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart   (name, price, quantity, image) VALUES ('$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'Product added to cart!';
    }
}
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

        <div class="modal-content rounded-5 shadow">
            <div class ="row py-lg-4">
                <div class ="py-4 text-center container">
                    <h1 class="fw-bold mb-0" style="color: purple;">Latest Product</h1>
                    <p><h4 class="fw-light mb-0" style="color: black;"><a href="http://localhost/ABP_Project/home.php">Home</a> /Shop</h4></p>
                </div>
                
                <div class="products">
                    <div class="box-container">
                        <?php  
                        $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                        if(mysqli_num_rows($select_products) > 0){
                            while($fetch_products = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post" class="box">
                        <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_products['name']; ?></div>
                        <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
                        <input type="number" min="1" name="product_quantity" value="1" class="qty">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                        </form>
                        <?php
                        }
                        }else{
                        echo '<p class="empty">no products added yet!</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>        

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