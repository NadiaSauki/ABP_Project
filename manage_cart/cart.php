<!DOCTYPE html>
<html>
    <head>
    <title>EBook System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="http://localhost/ABP_Project/css/home.css">

    </head>

    <body>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="http://localhost/ABP_Project/home.php">Home</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_browsing/browse.php">Browsing</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_library/library.php">Library</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_genre/genre.php">Genre</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_notification/message.php">Notification</a></li>
                        <li><a href="http://localhost/ABP_Project/manage_payment/payment.php">Premium</a></li>
                    </ul>
                    
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                    <a href="http://localhost/ABP_Project/login.php" class="btn btn-outline-light me-2" role="button">Login</a>
                    <a href="http://localhost/ABP_Project/register.php" class="btn btn-warning" role="button">Register</a>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>