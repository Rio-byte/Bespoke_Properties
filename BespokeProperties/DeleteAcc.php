<?php
session_start();
require "db.php";
$username = $_SESSION['Username'];
if (isset($_POST['delete'])) {
    $user_Del = "DELETE from users where users.Username=$username";
    mysqli_query($conn, $user_Del);
}