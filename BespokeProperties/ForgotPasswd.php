<?php
session_start();
include "db.php";
$errors = array();
$email = '';
$password = '';
$username = '';
//Fetching data from ForgotPasswd form.
if (isset ($_POST['forgot_passwd'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty ($email)) {
        array_push($errors, "Email cannot be empty");
    }
    if (empty ($password)) {
        array_push($errors, 'Password cannot be empty');
    }
    $check_email = "SELECT * From users Where Username ='$username' or Email ='$email' Limit 1";
    $result = mysqli_query($conn, $check_email);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($user['Email'] === $email) {
            if (count($errors) == 0) {
                //Encrypting Password
                $password_E = md5($password);
                $update_passwd = " UPDATE bespoke_properties.users SET `Password` = '$password_E' where `users`.`email`= '$email'";
                ;
                $update = mysqli_query($conn, $update_passwd);
                $_SESSION['success'] = "Password has been Updated";
                header("location:home.php");
            }
        }
    } else {
        array_push($errors, "Email doen't exist");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/login.css">
    <style>
        .transparent a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- --------Forgot password Form--------- -->
                <form action="ForgotPasswd.php" method="post" class="sign-in-form">
                    <h2 class="title">Change Password</h2>
                    <?php include "errors.php"; ?>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder=" New Password" />
                    </div>
                    <!--Submit data for processing-->
                    <input type="submit" value="Submit" name="forgot_passwd" class="btn solid" />
            </div>
            </form>
        </div>
    </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>OOps !!!</h3>
                <p>
                    You forgot your password!!&nbsp; Well its not the end for you. </br>
                    Make a quick change and continue enjoying our services.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    <a href="login.php">Login</a>
                </button>

            </div>
            <img src="./assets/images/forgotpassword.png" class="image" alt="" style="height:400px ;width: 390px;" />
        </div>
    </div>
    <script src="" async defer></script>
</body>

</html>