<?php

include 'config.php';
session_start();

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){

        $row = mysqli_fetch_assoc($select_users);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];
            header('location:http://localhost/ABP_Project/manage_profile/admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:http://localhost/ABP_Project/home.php');

        }

    }else{
        $message[] = 'incorrect email or password!';
    }

}

?>


<!Doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://localhost/ABP_Project/css/login.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/ABP_Project/css/home.css">
    </head>

    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '
            <div class="message">
                <span>'.$message.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>

    <body>

        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="http://localhost/ABP_Project/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"><h3>bookly.</h3>
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a onclick="alert('Please log in your account to continue the activity')">About</a></li>
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


        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="images/1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        
                        <h3>Sign into your account</h3><br>
                        
                        <form method="POST">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="email" placeholder="Email Address" class="form-control my-3 p-4" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" placeholder="********" class="form-control my-3 p-4" name="password" id="pass" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="button" class="btn1 mt-3 mb-5" name="login">Login</button>
                                </div>
                            </div>
                            <p>Dont't have an account? <a href="http://localhost/ABP_Project/register.php">Register here</a></p><br>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>