<!--
Select 30 ✔
Update ✔ ForgotPasswd 23
Insert 44 ✔
Delete 
-->
<?php
session_start();
$username = '';
$email = '';
$errors = array();
include "db.php";
//Get form inputs
if (isset ($_POST['reg_user'])) {
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    //form validation protocols
    if (empty ($username)) {
        array_push($errors, "Username is required");
    }
    if (empty ($email)) {
        array_push($errors, "Email is required");
    }
    if (empty ($password)) {
        array_push($errors, "Password is required");
    }
    //uploading to database
    //check if username or email already exist
    $user_check_query = "SELECT * From users Where Username ='$username' or Email ='$email' Limit 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { //if username exists
        if ($user['Username'] === $username) {
            array_push($errors, "Username already exist");
        }
        if ($user['Email'] === $email) {
            array_push($errors, "Email already exist");
        }
    }
    if (count($errors) == 0) {
        $password_1 = md5($password);//encrypt password
        $query = "INSERT into bespoke_properties.users (Username,Email,Password)
    values('$username','$email','$password_1')";
        mysqli_query($conn, $query);
        $_SESSION['Username'] = $username;
        $_SESSION['sucess'] = 'Account creation sucess';
        header('location: home.php');
    }
}

if (isset ($_POST['login_user'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    //field validation controls
    if (empty ($username)) {
        array_push($errors, "Username is required");
    }
    if (empty ($password)) {
        array_push($errors, "Password is required");
    }
    //Loging in a user
    if (count($errors) == 0) {
        $password_1 = md5($password);
        //select query
        $query = "SELECT *From users where Username='$username' and Password ='$password_1'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['Username'] = $username;
            $_SESSION['sucess'] = "You are now logged in";
            header('location: home.php');
        } else {
            array_push($errors, "Wrong Username or Password");
        }
    }
}
?>