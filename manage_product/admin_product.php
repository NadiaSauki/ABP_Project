<?php

$conn = mysqli_connect("localhost:3306","root","","shop_db");
if(!$conn)
{
	echo "Database connection faild...";
}

session_start();

if(isset($_POST['add_product'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = $_POST['price'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_product_name) > 0){
      $message[] = 'product name already added';
   }else{
      $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$name', '$price', '$image')") or die('query failed');

      if($add_product_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'product added successfully!';
         } //LINE 31 NEED TO ADJUST, WHY CAN'T UPLOAD IMAGE
      }else{
         $message[] = 'product could not be added!';
      }
   }
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_products.php');
}

if(isset($_POST['update_product'])){

   $update_p_id = $_POST['update_p_id'];
   $update_name = $_POST['update_name'];
   $update_price = $_POST['update_price'];

   mysqli_query($conn, "UPDATE `products` SET name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'uploaded_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('uploaded_img/'.$update_old_image);
      }
   }

   header('location:admin_products.php');

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
                
        <link rel="stylesheet" type="text/css" href="http://localhost/ABP_Project/css/admin.css">
    </head>

    <body>
        <header class="p-3 bg-light text-black">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="http://localhost/ABP_Project/manage_profile/admin_page.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"><h3 style="color: purple;">AdminPanel</h3>
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="http://localhost/ABP_Project/manage_profile/admin_page.php">Home</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_product/admin_product.php">Products</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_order/admin_order.php">Orders</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_profile/admin_user.php">Users</a></li>
                    </ul>

                    <div class="text-end">
                        <ul>
                            <li><a href="http://localhost/ABP_Project/manage_profile/user_profile.php"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="http://localhost/ABP_Project/logout.php">Sign out</a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </header>

        <div class="py-4 text-center container">
            <div class="row py-lg-4">    
                <h1 class="fw-bold mb-0" style="color: purple;">SHOP PRODUCTS</h1>
            </div>        

            <div class="modal-content rounded-5 shadow">
                <div class="row py-lg-4">
                <h2 class="fw-light">ADD PRODUCTS</h2>
                    <div class="modal-body p-5 pt-4">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-4">
                                <input type="text" name="name" class="form-control rounded-4" placeholder="Enter Product Name" required>
                                <label for="">Enter Product Name</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="number" min="0" name="price" class="form-control rounded-4" placeholder="Enter Product Price" required>
                                <label for="">Enter Product Price</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" name="detail" class="form-control rounded-4" placeholder="Enter Product Details">
                                <label for="">Enter Product Details</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="file" name="image" class="form-control rounded-4" placeholder="Insert Product Image" accept="image/jpg, image/jpeg, image/png">
                            </div>

                            <div class="form-floating mb-4">
                                <input type="submit" value="add product" name="add_product" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-content rounded-5 shadow">
            <div class="show-products">
                <div class="row py-lg-4">
                    <div class="box-container">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_products = mysqli_fetch_assoc($select_products)){
                        ?>
                        <div class="box">
                            <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                            <div class="name"><?php echo $fetch_products['name']; ?></div>
                            <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
                            <a href="admin_products.php?update=<?php echo $fetch_products['id']; ?>" class="option-btn">update</a>
                            <a href="admin_products.php?delete=<?php echo $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
                        </div>
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
        
        <div class="modal-content rounded-5 shadow">
            <div  class="row py-lg-4">
                <div class="edit-product-form">
                    <?php
                        if(isset($_GET['update'])){
                            $update_id = $_GET['update'];
                            $update_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$update_id'") or die('query failed');
                            if(mysqli_num_rows($update_query) > 0){
                                while($fetch_update = mysqli_fetch_assoc($update_query)){
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
                        <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
                        <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="">
                        <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="box" required placeholder="enter product name">
                        <input type="number" name="update_price" value="<?php echo $fetch_update['price']; ?>" min="0" class="box" required placeholder="enter product price">
                        <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
                        <input type="submit" value="update" name="update_product" class="btn">
                        <input type="reset" value="cancel" id="close-update" class="option-btn">
                    </form>
                    <?php
                            }
                        }
                        }else{
                            echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <div class="p-3 bg-light text-black">
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