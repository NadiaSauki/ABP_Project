<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

/*if(!isset($user_id)){
   header('location:login.php');
}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> <a href="contact.php">/ contact</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/abt-img.png" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>juBook is a unique and special place to shop- a locally owned independently run since 1980. Our bookstore is known as extraordinary selection of new books</p>
         <p>Currently in Malaysia, there are about 5 stores nationwide, in Kedah, Penang, Selangor, Johor dan Pahang. Consistently meets its Customer's reading needs , and provides a superior shopping experience as a result , juBook acknowledge as the leading lifestyle bookstore</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Feedback</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/refal.jpg" alt="">
         <p>Very cool and unique shop. The book is really great price on both new and used items. Highly recommended! Terima Kasih ! &#128151; </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-o"></i>
         </div>
         <h3>Danis</h3>
      </div>

      <div class="box">
         <img src="images/aldi.jpg" alt="">
         <p>Great local bookstore with very friendly, helpfull and knowledgable staff. The book with reasonable price. Awesome!   </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zul</h3>
      </div>

      <div class="box">
         <img src="images/kinan.jpg" alt="">
         <p>Had a beautiful experience shopping at Ju's Book Store. Heather is so sweet and very helpfull. Very excited to read the book </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sabrina</h3>
      </div>

      <div class="box">
         <img src="images/sarah.jpg" alt="">
         <p>Wonderfull bookstore! Carries local authors. Reasonable price and will surely order again. Always ready to help. Cant go wrong :) </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ayuni</h3>
      </div>

      <div class="box">
         <img src="images/indah.webp" alt="">
         <p>Hi ! Sorry for the late feeback. I opened the package and here it is! very excited to read these books.Thank you very much!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-o"></i>
         </div>
         <h3>Syakirah</h3>
      </div>

      <div class="box">
         <img src="images/ib.jpg" alt="">
         <p>Very accomodating seller and trustworthy. The books are in good condition and love the packaging. So happy to find this page &#128516; .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rul</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Best authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/fahmi.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Fahmi</h3>
      </div>

      <div class="box">
         <img src="images/akif.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Akif</h3>
      </div>

      <div class="box">
         <img src="images/syaza.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Syaza</h3>
      </div>

      <div class="box">
         <img src="images/fas.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Fasihah</h3>
      </div>

      <div class="box">
         <img src="images/iman.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Iman</h3>
      </div>

      <div class="box">
         <img src="images/nad.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/?hl=en" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Nadia</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>