<?php
session_start();
include "../db.php";
$errors = array();
$password = '';
$username = '';
//Fetching data from admin login form.
if (isset ($_POST['admin-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty ($username)) {
        array_push($errors, "Username cannot be empty");
    }
    if (empty ($password)) {
        array_push($errors, 'Password cannot be empty');
    }
    if (count($errors) == 0) {
        $password_1 = md5($password);
        //select query
        $query = "SELECT *From admins where Username='$username' and Password ='$password_1'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['Username'] = $username;
            $_SESSION['sucess'] = "You are now logged in !!!";
            header('location:../Admin/dashboard.php');
        } else {
            array_push($errors, "Wrong Username or Password");
        }
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
    <link rel="stylesheet" href="../assets/css/login.css">
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
                <!-- --------Login admin Form--------- -->
                <form action="adminlogin.php" method="post" class="sign-in-form">
                    <h2 class="title">Administrator Login</h2>
                    <?php include "../errors.php"; ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Admin Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder=" Admin Password" />
                    </div>
                    <!--Submit data for processing-->
                    <input type="submit" value="Login" name="admin-login" class="btn solid" />
            </div>
            </form>
        </div>
    </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Hello Administrator !!!</h3>
                <p>
                    Happy to have you back at work.</br>
                    Hope you will enjoy your work to better our organization</br>
                    You much appreciated !!!
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    <a href="../index.php">Back</a>
                </button>

            </div>
            <img src="../assets/images/log.svg" class="image" alt="" />
        </div>
    </div>
    <script src="" async defer></script>
</body>

</html>