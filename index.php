<!DOCTYPE html>
<html>
    <head>
    <title>Bookly.</title>
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
                    <a href="http://localhost/ABP_Project/home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"><h3>bookly.</h3>
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="http://localhost/ABP_Project/manage_shop/about.php">About</a></li>
                        <li><a onclick="alert('Please log in your account to continue the activity')">Product</a></li>
                        <li><a onclick="alert('Please log in your account to continue the activity')">Orders</a></li>
                    </ul>

                    <div class="text-end">
                        <a href="http://localhost/ABP_Project/login.php" class="btn btn-outline-light me-2" role="button">Login</a>
                        <a href="http://localhost/ABP_Project/register.php" class="btn btn-warning" role="button">Register</a>
                    </div>
                </div>
            </div>
        </header>

        <!--slideshow-->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%"><rect width="100%" height="100%" fill="#d5a6bd"/></svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>How Villainess Should Be</h1>
                            <p><img src="images/3.jpg" class="img-fluid" alt=""></p>
                            <p>Disliked, hated and abandoned. I was treated like a slave more than a daughter. The one I loved the most turned his back on me. But one accident was enough for me to discover everything about myself. Familiar memories and experiences enlightened my mind. I never believed in reincarnation but it seems like I'm experiencing it. I was given a second life. I became the villainess of a story I just read not long ago. Others call it transmigration. Truly a cliché."So I'm a villainess huh... </p>
                            <p><a class="btn btn-lg btn-primary" href="https://www.wattpad.com/story/271958974-how-a-villainess-should-be">Read</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%"><rect width="100%" height="100%" fill="#d5a6bd"/></svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>another EXAMPLE headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><img src="images/3.jpg" class="img-fluid" alt=""></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Read</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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