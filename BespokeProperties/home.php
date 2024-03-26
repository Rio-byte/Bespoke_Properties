<?php
session_start();
/*
It redirects a user to login to the Page first before getting access to it.
*/
if (!isset ($_SESSION['Username'])) {
    $_SESSION['msg'] = "LOG in to Account";
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BESPOKE</title>

    <!--
      - favicon
      --->

    <link rel="icon" type="image/x-icon" href="favicon.ico">



    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/main_original.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!---
        - google icon link
    --->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />
    <style>
        /* Login dropdown */
        @import url(https://use.fontawesome.com/releases/v6.4.2/css/all.css);
        /* @import url(https://fonts.googleapis.com/css?family=Segoe);  */
        @import url(https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap);

        .login_dropdown {
            position: relative;
            display: inline-block;
        }

        .content {
            display: none;
            position: absolute;
            z-index: 1;
            min-width: 120px;
            background-color: rgba(255, 255, 255, 0.756);
            ;
            border-radius: 10px;
            margin-left: -30px;
        }

        .content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: inherit;
            font-size: 13px;
        }

        .content a:hover {
            background-color: rgba(128, 128, 128, 0.356);
            ;
            border-radius: 10px;
            font-size: 13px;
        }

        .login_dropdown:hover .content {
            display: block;
        }
    </style>

</head>

<body>

    <!--- HEADER --->

    <header class="header " data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="#" class="logo">
                <img src="./assets/images/logos.png" alt="logo">
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="#property-listings" class="navbar-link" data-nav-link>Property Listings</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link" data-nav-link>About Us</a>
                    </li>

                    <li>
                        <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
                    </li>

                </ul>
            </nav>


            <div class="header-actions">

                <div class="header-contact">
                    <a href="tel:+25412356789" class="contact-link">+254 123 456 789</a>

                    <span class="contact-time">Mon - Fri: 9:00 am - 6:00 pm</span>
                </div>

                <a href="#property-listings" class="btn" aria-labelledby="aria-label-txt">
                    <ion-icon name="home"></ion-icon>

                    <span id="aria-label-txt">Property Listings</span>
                </a>
                <div class="login_dropdown">
                    <a class="btn user-btn" aria-label="Profile">
                        <i class="fa-regular fa-user"></i>
                    </a>
                    <div class="content">
                        <a href="logout.php" action="logout">Log Out</a>
                    </div>

                    <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
                        <span class="one"></span>
                        <span class="two"></span>
                        <span class="three"></span>
                    </button>

                </div>

            </div>
    </header>


    <main>
        <article>

            <!---- HERO ----->

            <section class="section hero" id="home">
                <div class="container">

                    <div class="hero-content">

                        <h1 class="headline-large hero-title">Find a place where you can be yourself</h1>

                        <p class="body-large hero-text">
                            Keep searching until you find a place that feels like home. We are here for you.
                        </p>
                    </div>

                    <div class="hero-banner"></div>

                    <form action="" method="get" class="hero-form">

                        <div class="input-wrapper">

                            <label class="input-label">
                                <span class="label-medium label">Want to</span>

                                <select name="want-to" class="input-field">
                                    <option value="buy" selected>Buy</option>
                                    <option value="sell" selected>Sell</option>
                                    <option value="rent" selected>Rent</option>
                                </select>

                                <!--<span class="material-symbols-rounded" aria-hidden="true">real estate agent</span> -->
                            </label>
                        </div>

                        <div class="input-wrapper">

                            <label class="input-label">
                                <span class="label-medium label">Property Type</span>

                                <select name="property-type" class="input-field">
                                    <option value="any" selected>Any</option>
                                    <option value="houses" selected>Houses</option>
                                    <option value="apartments" selected>Apartments</option>
                                    <option value="villa" selected>Villa</option>
                                    <option value="town home" selected>Town Home</option>
                                    <option value="bungalow" selected>Bungalow</option>
                                    <option value="loft" selected>Loft</option>
                                </select>

                                <!-- <span class="material-symbols-rounded" aria-hidden="true">gite</span> -->
                            </label>
                        </div>

                        <div class="input-wrapper">

                            <label class="input-label">
                                <span class="label-medium label">Location</span>

                                <input type="text" name="location" placeholder="Street, City, Zip ..."
                                    class="input-field">

                                <!-- <span class="material-symbols-rounded" aria-hidden="true">location_on</span> -->
                            </label>
                        </div>

                        <button type="submit" class="btn">
                            <!-- <span class="material-symbols-rounded" aria-hidden="true">search</span> -->

                            <span class="label-medium">Search</span>
                        </button>
                    </form>

                </div>
            </section>






            <!---- PROPERTY SECTION ----->

            <section class="section property-listings" id="property-listings">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Property Listings</h2>

                        <a href="#" class="property-listings-link">
                            <span>View more for LEASE/SALE/RENT</span>

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>

                    <ul class="property-listings-list">

                        <li>
                            <div class="property-listings-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/banner_1.jpg" alt="Toyota RAV4 2021" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">12,000 sqt Mansionette</a>
                                        </h3>

                                        <data class="year" value="2021">2021</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">8 Beds</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Solar & Main-Grid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">Borehole water</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">12 baths</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>Ksh. 65,000</strong> / month
                                        </p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="property-listings-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/banner_2.jpg" alt="BMW 3 Series 2019" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Azure 750sqt Apartment studios </a>
                                        </h3>

                                        <data class="year" value="2019">2019</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">1 Bed</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Main-Grid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">Borehole water</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">1 Bath</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>Ksh. 25,000</strong> / month
                                        </p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="property-listings-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/banner_3.jpg" alt="Volkswagen T-Cross 2020" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">5,000 sqt Vacation Villas</a>
                                        </h3>

                                        <data class="year" value="2020">2020</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 Beds</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">PURE SOLAR</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">Borehole water</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">6 Baths </span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>Ksh. 55,000</strong> / month
                                        </p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="property-listings-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/banner_4.jpg" alt="Cadillac Escalade 2020" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Cadillac Gated 6,000 sqt Homes</a>
                                        </h3>

                                        <data class="year" value="2020">2020</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">5 Beds</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Solar & Main-Grid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">Borehole water</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">7 Baths </span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>Ksh. 8.9 Million SALE</strong>
                                        </p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Buy now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="property-listings-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/banner_5.jpg" alt="BMW 4 Series GTI 2021" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">7,500 sqt Modern Single Townhome</a>
                                        </h3>

                                        <data class="year" value="2021">2021</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 Beds</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Main-Grid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">Borehole water</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">5 Baths</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>Ksh. 5.2 Million SALE</strong>
                                        </p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Buy now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="property-listings-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/banner_6.jpg" alt="BMW 4 Series 2019" loading="lazy"
                                        width="440" height="300" class="w-100">
                                </figure>

                                <div class="card-content">

                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">1,020 sqt Corazon Lofts</a>
                                        </h3>

                                        <data class="year" value="2019">2019</data>
                                    </div>

                                    <ul class="card-list">

                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">2 Beds</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Solar & Main-Grid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">Borehole water</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">1 Bath</span>
                                        </li>

                                    </ul>

                                    <div class="card-price-wrapper">

                                        <p class="card-price">
                                            <strong>Ksh. 2.4 Million SALE</strong>
                                        </p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Buy now</button>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
            #GETTING STARTED PROCESS
        -->

            <section class="section get-start">
                <div class="container">

                    <h2 class="h2 section-title">Get started with 4 simple steps</h2>

                    <ul class="get-start-list">

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-1">
                                    <ion-icon name="person-add-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Create a profile</h3>

                                <p class="card-text">
                                    For a streamlined use of our services, you need to create a personalized profile.
                                </p>

                                <a href="#" class="card-link">Get started</a>

                            </div>
                        </li>

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-2">
                                    <ion-icon name="car-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Tell us what residence you want or have</h3>

                                <p class="card-text">
                                    As a buyer you select the residence preference you'd like; likewise as a seller you
                                    post it.
                                    Both have to specify whether they are renting, leasing or a full sale acquisition.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-3">
                                    <ion-icon name="person-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Match with a seller or buyer</h3>

                                <p class="card-text">
                                    When the buyer selects a residence they like, that the seller has posted then they
                                    are matched and
                                    process proceeds to making a deal.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="get-start-card">

                                <div class="card-icon icon-4">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>

                                <h3 class="card-title">Make a deal</h3>

                                <p class="card-text">
                                    Finalize the process by making a transactional deal through us to ensure
                                    credibility.
                                </p>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
          - #BLOG
        -->

            <section class="section blog" id="blog">
                <div class="container">

                    <h2 class="h2 section-title">Our Blog</h2>

                    <ul class="blog-list has-scrollbar">

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">

                                    <a href="#">
                                        <img src="./assets/images/blog-1.jpg"
                                            alt="Opening of new offices of the company" loading="lazy" class="w-100">
                                    </a>

                                    <a href="#" class="btn card-badge">Company</a>

                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">
                                        <a href="#">Opening of new offices of the company</a>
                                    </h3>

                                    <div class="card-meta">

                                        <div class="publish-date">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="2022-01-14">January 1, 2021</time>
                                        </div>

                                        <div class="comments">
                                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                                            <data value="114">114</data>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">

                                    <a href="#">
                                        <img src="./assets/images/blogs-1.jpg" alt="How we verify sellers legitimacy"
                                            loading="lazy" class="w-100">
                                    </a>

                                    <a href="#" class="btn card-badge">Credibility</a>

                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">
                                        <a href="#">How we verify sellers legitimacy.</a>
                                    </h3>

                                    <div class="card-meta">

                                        <div class="publish-date">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="2022-01-14">July 12, 2021</time>
                                        </div>

                                        <div class="comments">
                                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                                            <data value="114">114</data>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">

                                    <a href="#">
                                        <img src="./assets/images/blogs-3.jpg"
                                            alt="Our long-standing statistics on better housing deals" loading="lazy"
                                            class="w-100">
                                    </a>

                                    <a href="#" class="btn card-badge">Track Record</a>

                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">
                                        <a href="#">Our long-standing statistics on better housing deals.</a>
                                    </h3>

                                    <div class="card-meta">

                                        <div class="publish-date">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="2022-01-14">December 1, 2021</time>
                                        </div>

                                        <div class="comments">
                                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                                            <data value="114">114</data>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">

                                    <a href="#">
                                        <img src="./assets/images/blogs-4.jpg"
                                            alt="What´s required when renting a house" loading="lazy" class="w-100">
                                    </a>

                                    <a href="#" class="btn card-badge">Renting</a>

                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">
                                        <a href="#">What´s required when renting a house?</a>
                                    </h3>

                                    <div class="card-meta">

                                        <div class="publish-date">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="2022-01-14">January 10, 2022</time>
                                        </div>

                                        <div class="comments">
                                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                                            <data value="114">114</data>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">

                                    <a href="#">
                                        <img src="./assets/images/blogs-5.jpg"
                                            alt="New rules for applying for a house tour" loading="lazy" class="w-100">
                                    </a>

                                    <a href="#" class="btn card-badge">Free Tours</a>

                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">
                                        <a href="#">New rules for applying for a house tour.</a>
                                    </h3>

                                    <div class="card-meta">

                                        <div class="publish-date">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="2022-01-14">September 14, 2022</time>
                                        </div>

                                        <div class="comments">
                                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                                            <data value="114">114</data>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>







            <!--
         - #TESTIMONIALS
       -->

            <section class="section testimonials" id="testimonials">
                <div class="container">

                    <p class="section-subtitle"> -- Some Testimonials --</p>

                    <h2 class="h2 section-title">Feedback From Happy Clients</h2>

                    <ul class="has-scrollbar">

                        <li class="testi-item">
                            <div class="testi-card">

                                <div class="card-header">

                                    <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true"
                                        alt="">

                                    <img src="./assets/images/testimonial-1.jpg" width="90" height="90" loading="lazy"
                                        alt="Willow Peralta" class="card-avatar">

                                    <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true"
                                        alt="">

                                </div>

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <blockquote class="card-text">
                                    The bespoke company website made renting a new apartment a breeze.
                                    Seamless process and excellent support!
                                </blockquote>

                                <h3 class="card-title">Willow Peralta</h3>

                                <p class="card-subtitle">LLB Student</p>

                            </div>
                        </li>

                        <li class="testi-item">
                            <div class="testi-card">

                                <div class="card-header">

                                    <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true"
                                        alt="">

                                    <img src="./assets/images/testimonial-2.jpg" width="90" height="90" loading="lazy"
                                        alt="Pamelia Hamrick" class="card-avatar">

                                    <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true"
                                        alt="">

                                </div>

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <blockquote class="card-text">
                                    Thanks to the bespoke company website,
                                    I found my dream home quickly and stress-free. Highly recommend!
                                </blockquote>

                                <h3 class="card-title">Pamelia Hamrick</h3>

                                <p class="card-subtitle">Web Developer</p>

                            </div>
                        </li>

                        <li class="testi-item">
                            <div class="testi-card">

                                <div class="card-header">

                                    <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true"
                                        alt="">

                                    <img src="./assets/images/testimonial-3.jpg" width="90" height="90" loading="lazy"
                                        alt="Novella Gerber" class="card-avatar">

                                    <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true"
                                        alt="">

                                </div>

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <blockquote class="card-text">
                                    Selling my property was a breeze with the bespoke company website.
                                    Professional, efficient, and effective service!
                                </blockquote>

                                <h3 class="card-title">Novella Gerber</h3>

                                <p class="card-subtitle"> Lawyer</p>

                            </div>
                        </li>

                    </ul>

                </div>

            </section>


        </article>
    </main>




    <!--
     - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand">

                    <a href="./index.html" class="logo">BE<span class="span">SPOKE</span></a>

                    <p class="footer-text">
                        It was popularised in the 2020s with the rise of Covid Pandemic that made it reliable to book
                        and
                        research buying, renting and selling
                        houses online and makes it easier for credible houses.
                    </p>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Company</p>
                    </li>

                    <li>
                        <a href="#blog" class="footer-link">About Us</a>
                    </li>

                    <li>
                        <a href="#property-listings" class="footer-link">Shop</a>
                    </li>

                    <li>
                        <a href="#blog" class="footer-link">Blog</a>
                    </li>

                    <li>
                        <a href="#property-listings" class="footer-link">Product</a>
                    </li>

                    <li>
                        <a href="#home" class="footer-link">Contact Us</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Contact</p>
                    </li>

                    <li class="footer-item">
                        <div class="contact-icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="contact-link">
                            Tom Mboya Street, Nairobi, Building IN 47933
                        </address>
                    </li>

                    <li class="footer-item">
                        <div class="contact-icon">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+1800123456789" class="contact-link">+254 123 456 789</a>
                    </li>

                    <li class="footer-item">
                        <div class="contact-icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:bespoke@help.com" class="contact-link">bespoke@help.com</a>
                    </li>

                </ul>

                <div class="footer-list">

                    <p class="footer-list-title">Newsletter</p>

                    <p class="newsletter-text">
                        You will be notified when something new will appear.
                    </p>

                    <form action="" class="footer-form">
                        <input type="email" name="email" placeholder="Email Address *" required class="footer-input">

                        <button type="submit" class="footer-form-btn" aria-label="Submit">
                            <ion-icon name="mail-outline"></ion-icon>
                        </button>
                    </form>

                </div>

            </div>
        </div>

        <div class="footer-bottom">


            <ul class="social-list">

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="mail-outline"></ion-icon>
                    </a>
                </li>

            </ul>

            <p class="copyright">
                &copy; 2022 <a href="#" class="copyright-link">bespoke-enterprises</a>. All Rights Reserved.
            </p>

            <ul class="footer-bottom-list">

                <li>
                    <a href="#" class="footer-bottom-link">Terms and Service</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                </li>

            </ul>


        </div>

    </footer>


    <!--
  - custom js link
-->
    <script src="./assets/js/script.js"></script>

    <!--
  - ionicon link
-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>