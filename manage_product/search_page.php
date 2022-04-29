<!DOCTYPE html>
<html>
    <head>
    <title>EBook System</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/93a36b9820.js" crossorigin="anonymous"></script>
                
        <link rel="stylesheet" type="text/css" href="http://localhost/ABP_Project/css/home.css">
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