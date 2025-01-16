<?php
session_start();
include "../db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Admin/css/dashboard.css">
    <!-- google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!---
        - google icon link
    --->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />
</head>

<body>
    <!--- HEADER --->
    <nav class="top-nav">
        <div class="logo">
            <img src="../assets/images/logos.png" alt="">
        </div>
        <div class="search-bar">
            <form action="search">
                <label for="" class="input-field">
                    <input type="text" name="name" id="" placeholder="" required>
                    <span class="placeholder">Search</span>
                </label>
                <button type="submit" class='search-btn'><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="icons">
            <a href="#notifications">
                <i class="fa-regular fa-bell"></i>
            </a>
            <a href="#profile">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
    </nav>
    <main>
        <!--Side nav-->
        <aside class="side-nav">
            <ul>
                <li class="menu"><a href="#"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                <li class="menu"><a href="#"><i class="fa fa-building"></i>Properties</a></li>
                <li class="menu"><a href="#"><i class="fa fa-users"></i>Users</a></li>
                <li class="menu"><a href="#"><i class="fa-regular fa-message"></i> Messages</a></li>
                <li class="menu"><a href="#"><i class="fa-regular fa-pen-to-square"></i>Admins</a></li>
                <li class="menu"><a href="../logout.php"><i class="fa fa-power-off"></i>Log out</a></li>
            </ul>
        </aside>
        <section class="badges">
            <div class="badge">
                <b>10.5 k</b>
                <i class="fa-regular fa-eye"></i>
                <br />
                <p>Property Views</p>
            </div>
            <div class="badge">
                <b>7.5 k</b>
                <i class="fa-regular fa-thumbs-up"></i>
                <p>Likes</p>
            </div>
            <div class="badge"><b>340</b>
                <i class="fa-regular fa-message"></i>
                <p>Comments</p>
            </div>
            <div class="badge"><b>24.2 k</b>
                <i class="fa fa-building-columns"></i>
                <p>Property Listings</p>
            </div>
        </section>
        <article class="uploads">
            <span><a href="../Admin/Propertyupload.php">Upload Properties</a></span>
        </article>
    </main>
    <script src="" async defer></script>
</body>

</html>