<?php 
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BESPOKE </title>

    <!-- boxicons link --->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- remixicons link --->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    <link href="https://fonts.googleapis.com/css2?family=Permanent+Markers&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="./assets/js/main.js" defer></script>
</head>
<body>
<!-- The video -->
<video autoplay muted loop id="myVideo">
    <source src="./assets/images/bg.mp4" type="video/mp4">
</video>

<header>
    <nav class="navbar">
        <span class="hamburger-btn material-symbols-rounded">menu</span>
        <a href="#" class="logo">
            <img src="./assets/images/logo1.png" alt="logo">
            <h2> BESPOKE</h2>
        </a>
        <ul class="links">
            <span class="close-btn material-symbols-rounded">close</span>
            <li><a href="#">Home</a></li>
            <li><a href="#">Property Listings</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
        <button class="login-btn">LOG IN</button>
    </nav>
</header>
<div class="glass">
  <section class="hero">
    <div class="hero-text">
       <h4>LEAD REAL ESTATE HELP</h4>
       <h1>BESPOKE</h1>
       <p>"Unlock your potential in the world of real estate. Join us, where every property is a canvas for your success, and every deal is an opportunity to create your legacy."</p>
       <a href="#"> Become a Buyer</a>
       <a href="#" class="ctaa">Become a Seller</a>
    </div>

    <div class="hero-img">
        <img src="./assets/images/Capture.PNG">
    </div>
 </section>
</div>


<div class="blur-bg-overlay"></div>
<div class="form-popup">
    <span class="close-btn material-symbols-rounded">close</span>
    <div class="form-box login">
        <div class="form-details">
            <h2>Welcome Back</h2>
            <p>Please log in using your personal information to stay connected with us.</p>
        </div>
        <div class="form-content">
            <?php  include 'errors.php'?>
            <h2>LOGIN</h2>
            <form action="main.php" method="POST">
                <div class="input-field">

                    <input type="text" placeholder="Username" name="Username" required>

                </div>
                <div class="input-field">

                    <input type="password" placeholder="Password" name="Password" required>

                </div>
               <br> <a href="#" class="forgot-pass-link">Forgot password?</a>
                <button type="submit"value='Login' name="login_user" >Log In</button>
            </form>
            <div class="bottom-link">
                Don't have an account?
                <a href="#" id="signup-link">Signup</a>
            </div>
        </div>
    </div>
    <div class="form-box signup">
        <div class="form-details">
            <h2>Create Account</h2>
            <p>To become a part of our community, please sign up using your personal information.</p>
        </div>
        <div class="form-content">
            <h2>SIGNUP</h2>
            <?php include 'errors.php' ?>
            <form action="main.php" method='POST'>
                <div class="input-field">
                   
                    <input type="text" placeholder="Enter your Username" name="Username"required>

                </div>
                <div class="input-field">
                    <input type="email" placeholder="Enter your email" name='Email'>

                </div>
                <div class="input-field">
                    <input type="password" placeholder="Create password" name="Password" required>

                </div>
                <div class="policy-text">
                    <input type="checkbox" id="policy">
                    <label for="policy">
                        I agree with the
                        <a href="#" class="option">Terms & Conditions</a>
                    </label>
                </div>
                <button type="submit" value="Sign up" name='reg_user'>Sign Up</button>
            </form>
            <div class="bottom-link">
                Already have an account?
                <a href="#" id="login-link">Login</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>