<!DOCTYPE html>
<html>
    <head>
    <title>EBook System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/home.css">

    </head>

    <body>
        <ul> <!--header-->
            <li><a href="#home">Home</a></li>
            <li><a href="#genre">Browse</a></li>
            <li style="float:right"><a href="/login.php">Login</a></li>
        </ul>

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
                            <h1>Another EXAMPLE headline.</h1>
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

        <!---->
    </body>
</html>