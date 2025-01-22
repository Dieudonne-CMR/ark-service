<?php 
include('api/cle_api.php');
include('api/api_services.php');
$services = recup_services();
// var_dump($services);


?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/donalfarm/our-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:37 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>Donal Farm HTML Template</title>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description"
        content="DonalFarm is a minimal, clean, and modern One Page HTML Template designed for farms and other agriculture-related businesses, such as organic farms, agricultural research centers, or produce stores.">
    <meta name="keywords"
        content=" dairy farm, poultry farm, livestock, organic produce, fresh vegetables, fruits, grains, sustainable agriculture, eco-friendly farming, farm machinery, irrigation, tractor">
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/odometer.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate2.min.css" />

    <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="icons/icomoon/style.css" />
    <link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/logo3x.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/logo3x.png" />
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="counter-scroll-4">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- main header start -->
        <?php include('includes/header.php') ?>
        <!-- main header end -->

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div class="loader-container">
                    <div class="wrap-loader">
                        <div class="loader">
                        </div>
                        <div class="icon">
                            <img src="images/logo/logo3x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Preloader -->

        <?php /*
        <!-- Top-bar -->
        <div class="tf-topbar">
            <div class="tf-container w-1780">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topbar-inner">
                            <div class="topbar-left">
                                <span class="fs-14 font-nunito">Welcome to DonalFarm</span>
                                <span class="fs-14 font-nunito">Agriculture & Organic Farms</span>
                            </div>
                            <div class="topbar-right">
                                <ul class="contact-list">
                                    <li class="item">
                                        <a href="#" class="icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </a>
                                        <a href="#">
                                            +1 987 654 3210
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="icon">
                                            <img src="icons/mailbox.png" alt="">
                                        </a>
                                        <a href="#">
                                            Donalfarms@gmail.com
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </a>
                                        <a href="#">
                                            Prinsengracht 250, Amsterdam Netherlands
                                        </a>
                                    </li>
                                </ul>
                                <ul class="social-list">
                                    <li class="item">
                                        <a href="#">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">

                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="icon-instagram2"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Top-bar --> */ ?>

       <?php /* <!-- Welcome -->
        <div class="box-welcome">
            <div class="tf-overlay"></div>
            <div class="welcome-wrap">
                <div class="content">
                    <div class="btn-close-welcome icon style-circle">
                        <i class="icon-close"></i>
                    </div>
                    <h3 class="title font-snowfall">
                        DonalFarm Agriculture <br />
                        Farm of laughter and
                        happiness!
                    </h3>
                    <p class="text font-nunito">
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                        Maecenas ex ligula, pulvinar
                        ultrices justo sed.
                    </p>
                    <ul class="infor-list">
                        <li class="item">
                            <i class="fa-solid fa-location-dot fs-18"></i>
                            <p>
                                Prinsengracht 250,
                                2501016 PM Amsterdam
                                Netherlands
                            </p>
                        </li>
                        <li class="item">
                            <i class="fa-solid fa-phone"></i>
                            <p>
                                Call us: (234)
                                109-6666
                            </p>
                        </li>
                        <li class="item">
                            <img src="icons/mailbox-2.png" alt="" />
                            <p>
                                Mail Support:
                                Donalfarms@gmail.com
                            </p>
                        </li>
                        <li class="item">
                            <i class="fa-solid fa-clock"></i>
                            <p>
                                Mon - Sat: 8.00am -
                                18.00pm
                            </p>
                        </li>
                    </ul>
                    <div class="wg-social">
                        <ul class="list">
                            <li class="item">
                                <a href="#"><i class="icon-facebook1"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-instagram2"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.Welcome --> */?>

        <?php /*
        <!-- Header  -->
        <header class="header has-item-bot" id="header-main">
            <div class="tf-container w-1780">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-inner">
                            <div class="header-left">
                                <div class="logo-site">
                                    <a href="index.html">
                                        <img src="images/logo/logo.png" alt="" />
                                    </a>
                                </div>
                                <div class="main-nav">
                                    <ul class="nav-list">
                                        <li class="item has-child ">
                                            <a href="javascript:void(0)">Home</a>
                                            <ul class="sub-nav">
                                                <li class="">
                                                    <a href="index.html">
                                                        <span>
                                                            Home 1
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home-2.html"><span>
                                                            Home 2
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home-3.html"><span>
                                                            Home 3
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item has-child">
                                            <a href="javascript:void(0)">Page</a>
                                            <ul class="sub-nav">
                                                <li>
                                                    <a href="about-us.html">
                                                        <span>
                                                            About Us
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="our-commitments.html">
                                                        <span>
                                                            Our Commitments
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="our-events.html">
                                                        <span>
                                                            Our Events
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="our-farmers.html">
                                                        <span>
                                                            Our Farmers
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="our-history.html">
                                                        <span>
                                                            Our History
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="coming-soon.html">
                                                        <span>
                                                            Coming Soon
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="404.html">
                                                        <span>
                                                            404
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="event-detail.html">
                                                        <span>
                                                            Event Detail
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">
                                                        <span>
                                                            FAQs
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="gallery.html">
                                                        <span>
                                                            Gallery
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="testimonial.html">
                                                        <span>
                                                            Testimonial
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item has-child">
                                            <a href="javascript:void(0)">Portfolio</a>
                                            <ul class="sub-nav">

                                                <li>
                                                    <a href="portfolio-style-1.html">
                                                        <span>
                                                            Portfolio Style
                                                            1
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-style-2.html">
                                                        <span>
                                                            Portfolio Style
                                                            2
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-style-3.html">
                                                        <span>
                                                            Portfolio Style
                                                            3
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-details.html">
                                                        <span>
                                                            Portfolio
                                                            Details
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item has-child">
                                            <a href="javascript:void(0)">Shop</a>
                                            <ul class="sub-nav">
                                                <li>
                                                    <a href="shop-products.html">
                                                        <span>
                                                            Shop Products
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-details.html">
                                                        <span>
                                                            Shop Details
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item has-child current-menu">
                                            <a href="javascript:void(0)">Services</a>
                                            <ul class="sub-nav">
                                                <li class="current-item">
                                                    <a href="our-services.html">
                                                        <span>
                                                            Our Services
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="service-detail.html">
                                                        <span>
                                                            Service Detail
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item has-child">
                                            <a href="javascript:void(0)">Blog</a>
                                            <ul class="sub-nav">
                                                <li>
                                                    <a href="blog-full-width.html">
                                                        <span>
                                                            Blog Full Width
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">
                                                        <span>
                                                            Blog Right
                                                            Sidebar
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-single.html">
                                                        <span>
                                                            Blog Single
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item has-child">
                                            <a href="contact-us.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-right">
                                <a href="contact-us.html" class="tf-btn gap-30">
                                    <span class="text-style">
                                        Get In Touch!
                                    </span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                                <div class="icon-wrap">
                                    <a class="icon header-search" href="#canvasSearch" data-bs-toggle="offcanvas">
                                        <i class="icon-magnifying-glass fs-21"></i>
                                    </a>
                                    <a href="#" class="icon wg-bag">
                                        <i class="icon-basket"></i>
                                    </a>
                                </div>
                                <div class="wg-welcome btn-open-welcome">
                                    <i class="icon-fences-icon fs-24"></i>
                                </div>

                                <div class="mobile-button">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-nav-wrap">
                            <div class="overlay-mobile-nav"></div>
                            <div class="inner-mobile-nav overflow-y-auto">

                                <div class="top">
                                    <div class="logo">
                                        <a href="index.html" rel="home" class="main-logo">
                                            <img id="mobile-logo_header" alt="" src="images/logo/logo-2.png" />
                                        </a>
                                        <div class="mobile-nav-close">
                                            <i class="icon-close"></i>
                                        </div>
                                    </div>
                                    <nav id="mobile-main-nav" class="mobile-main-nav">
                                        <ul id="menu-mobile-menu" class="menu">
                                            <li class="menu-item menu-item-has-children-mobile ">
                                                <a class="item-menu-mobile " href="javascript:void(0)">
                                                    Home
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item ">
                                                        <a href="index.html">Home 1</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-2.html">Home 2</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-3.html">Home 3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile" href="javascript:void(0)">
                                                    Page
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="about-us.html">About Us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="our-commitments.html">Our Commitments</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="our-events.html">Our Events</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="our-farmers.html">Our Farmers</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="our-history.html">Our History</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="coming-soon.html">Coming Soon</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="404.html">404</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="event-detail.html">Event Detail</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="faq.html">FAQs</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery.html">Gallery</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="testimonial.html">Testimonial</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile" href="javascript:void(0)">
                                                    Portfolio
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="portfolio-details.html">Portfolio Detail</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="portfolio-style-1.html">Portfolio Style
                                                            1</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="portfolio-style-2.html">Portfolio Style
                                                            2</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="portfolio-style-3.html">Portfolio Style
                                                            3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile " href="javascript:void(0)">
                                                    Shop
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="shop-details.html">Shop Detail</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-products.html">Shop Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile current" href="javascript:void(0)">
                                                    Services
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item current">
                                                        <a href="our-services.html">Our Services</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="service-detail.html">Service Detail</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile" href="javascript:void(0)">Blog
                                                    <i class="icon-arrow_down"></i></a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="blog-full-width.html">Blog Full Width</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-right-sidebar.html">Blog Right
                                                            Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-single.html">Blog Single</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile" href="contact-us.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="group-icon">
                                        <a class="site-nav-icon header-search" href="#canvasSearch"
                                            data-bs-toggle="offcanvas">
                                            <i class="icon-magnifying-glass fs-21"> </i>
                                            Search
                                        </a>
                                        <a href="shop-products.html" class="site-nav-icon wg-bag">
                                            <i class="icon-basket"></i>
                                            Shop
                                        </a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="infor-list">
                                        <ul>
                                            <li>
                                                <h5 class="title">
                                                    Address:
                                                </h5>
                                                <p>
                                                    Prinsengracht 250, Amsterdam Netherlands
                                                </p>
                                            </li>
                                            <li>
                                                <h5 class="title">
                                                    Phone:
                                                </h5>
                                                <p>
                                                    +1 987 654 3210
                                                </p>
                                            </li>
                                            <li>
                                                <h5 class="title">
                                                    Email:
                                                </h5>
                                                <p>

                                                    Donalfarms@gmail.com
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wg-social">
                                        <ul class="list">
                                            <li class="item">
                                                <a href="#"><i class="icon-facebook1"></i></a>
                                            </li>
                                            <li class="item">
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li class="item">
                                                <a href="#"><i class="icon-instagram2"></i></a>
                                            </li>
                                            <li class="item">
                                                <a href="#"><i class="icon-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-header style-absolute">
                <div class="tf-container w-1780">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-inner ">
                                <div class="header-left">
                                    <div class="logo-site">
                                        <a href="index.html">
                                            <img src="images/logo/logo.png" alt="" />
                                        </a>
                                    </div>
                                    <div class="main-nav">
                                        <ul class="nav-list">
                                            <li class="item has-child ">
                                                <a href="javascript:void(0)">Home</a>
                                                <ul class="sub-nav">
                                                    <li class="">
                                                        <a href="index.html">
                                                            <span>
                                                                Home 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="home-2.html"><span>
                                                                Home 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="home-3.html"><span>
                                                                Home 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="item has-child">
                                                <a href="javascript:void(0)">Page</a>
                                                <ul class="sub-nav">
                                                    <li>
                                                        <a href="about-us.html">
                                                            <span>
                                                                About Us
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="our-commitments.html">
                                                            <span>
                                                                Our Commitments
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="our-events.html">
                                                            <span>
                                                                Our Events
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="our-farmers.html">
                                                            <span>
                                                                Our Farmers
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="our-history.html">
                                                            <span>
                                                                Our History
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="coming-soon.html">
                                                            <span>
                                                                Coming Soon
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">
                                                            <span>
                                                                404
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="event-detail.html">
                                                            <span>
                                                                Event Detail
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html">
                                                            <span>
                                                                FAQs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery.html">
                                                            <span>
                                                                Gallery
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="testimonial.html">
                                                            <span>
                                                                Testimonial
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="item has-child">
                                                <a href="javascript:void(0)">Portfolio</a>
                                                <ul class="sub-nav">

                                                    <li>
                                                        <a href="portfolio-style-1.html">
                                                            <span>
                                                                Portfolio Style
                                                                1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-style-2.html">
                                                            <span>
                                                                Portfolio Style
                                                                2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-style-3.html">
                                                            <span>
                                                                Portfolio Style
                                                                3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-details.html">
                                                            <span>
                                                                Portfolio
                                                                Details
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="item has-child">
                                                <a href="javascript:void(0)">Shop</a>
                                                <ul class="sub-nav">
                                                    <li>
                                                        <a href="shop-products.html">
                                                            <span>
                                                                Shop Products
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-details.html">
                                                            <span>
                                                                Shop Details
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="item has-child current-menu">
                                                <a href="javascript:void(0)">Services</a>
                                                <ul class="sub-nav">
                                                    <li class="current-item">
                                                        <a href="our-services.html">
                                                            <span>
                                                                Our Service
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="service-detail.html">
                                                            <span>
                                                                Service Detail
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="item has-child">
                                                <a href="javascript:void(0)">Blog</a>
                                                <ul class="sub-nav">
                                                    <li>
                                                        <a href="blog-full-width.html">
                                                            <span>
                                                                Blog Full Width
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html">
                                                            <span>
                                                                Blog Right
                                                                Sidebar
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single.html">
                                                            <span>
                                                                Blog Single
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="item has-child">
                                                <a href="contact-us.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-right">
                                    <a href="contact-us.html" class="tf-btn gap-30">
                                        <span class="text-style">
                                            Get In Touch!
                                        </span>
                                        <div class="icon">
                                            <i class="icon-arrow_right"></i>
                                        </div>
                                    </a>
                                    <div class="icon-wrap">
                                        <a class="icon header-search" href="#canvasSearch" data-bs-toggle="offcanvas">
                                            <i class="icon-magnifying-glass fs-21"></i>
                                        </a>
                                        <a href="shop-products.html" class="icon wg-bag">
                                            <i class="icon-basket"></i>
                                        </a>
                                    </div>
                                    <div class="wg-welcome btn-open-welcome">
                                        <i class="icon-fences-icon fs-24"></i>
                                    </div>
                                    <div class="mobile-button">
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-item children">
                    <img src="images/item/page-title-top.png" alt="">
                </div>
            </div>

            <div class="header-item">
                <img src="images/item/page-title-top.png" alt="">
            </div>
        </header><!-- /.Header --> */ ?>

        <!-- Page-title -->
        <div class="page-title page-our-service  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="images/page-title/our-service.jpg" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                    What Services Do We Provide?
                                </p>
                                <h1 class="title">
                                    Our Services
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)"> Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="images/item/grass.png" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content page-our-service page-our-commitments pb-0">

            <!-- Section our commitment 2 -->
            <section class="s-commitment-2">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="image-wrap">
                                <div class="image">
                                    <img src="images/widget/commitment.jpg" data-src="images/widget/commitment.jpg"
                                        alt="" class="lazyload">
                                </div>
                                <div class="img-item item-1 tf-animate__box">
                                    <img class="up-down-move" src="images/item/notice-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content-section">
                                <div class="heading-section style-2 ">
                                    <div class="img-item">
                                        <div class="item">
                                            <img class="tf-animate-1" src="images/item/rice-plant-2.png" alt="" />
                                        </div>
                                        <p class="sub-title">
                                            Our Commitment To Freshness

                                        </p>
                                    </div>

                                    <p class="title text-anime-style-1">
                                        We Always Bring The Best
                                        Products To Consumers
                                    </p>
                                </div>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio nunc, egestas
                                    quis efficitur eu, tempus ut nisi. Suspendisse dignissim ut massa ac bibendum.
                                    Vivamus sit amet felis odio. Phasellus a nisi eleifend.
                                </p>
                                <ul class="benefit-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p>We are committed to not using pesticides</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p>Do not use preservatives</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p>Fresh Fruits & Vegetables</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p>Low price guaranteed with quality</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p>Environmental protection is the focus</p>
                                    </li>
                                </ul>
                                <a href="shop-products.html" class="tf-btn">
                                    <span class="text-style">View Shop Product</span>
                                    <div class="icon"><i class="icon-arrow_right"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1 scroll-element-4">
                    <img src="images/item/tructor.png" alt="">
                </div>
            </section><!-- /.Section our commitment 2 -->

            <!-- Section benefit -->
            <section class="s-benefit style-2">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="benefit-list">
                                <div class="swiper-container slider-box-list">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0s">
                                                <div class="icon hover-icon style-circle">
                                                    <img src="icons/tomato.png" alt="">
                                                </div>
                                                <a href="our-commitments.html"
                                                    class="caption fw-6  font-worksans hover-text-secondary">
                                                    100% Organic Products
                                                </a>
                                                <p class="text font-nunito">
                                                    Ultrices sagittis orci a scelerisque <br> purus semper eget duis at.
                                                    <br>
                                                    Sollictudin nibh sit amet.
                                                </p>
                                            </div>

                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="icon style-circle hover-icon img-hover-2">
                                                    <i class="fa-solid fa-tractor"></i>
                                                </div>
                                                <a href="our-commitments.html"
                                                    class="caption fw-6  font-worksans hover-text-secondary">
                                                    Absolute Quality
                                                </a>
                                                <p class="text font-nunito">
                                                    Ultrices sagittis orci a scelerisque <br> purus semper eget duis at.
                                                    <br>
                                                    Sollictudin nibh sit amet.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="icon hover-icon style-circle">
                                                    <i class="fa-solid fa-leaf"></i>
                                                </div>
                                                <a href="our-commitments.html"
                                                    class="caption fw-6  font-worksans hover-text-secondary">
                                                    Environmentally Friendly
                                                </a>
                                                <p class="text font-nunito">
                                                    Ultrices sagittis orci a scelerisque <br> purus semper eget duis at.
                                                    <br>
                                                    Sollictudin nibh sit amet.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="icon hover-icon style-circle">
                                                    <img src="icons/dollar-circle.png" alt="">
                                                </div>
                                                <a href="our-commitments.html"
                                                    class="caption fw-6  font-worksans hover-text-secondary">
                                                    Reasonable Price
                                                </a>
                                                <p class="text font-nunito">
                                                    Ultrices sagittis orci a scelerisque <br> purus semper eget duis at.
                                                    <br>
                                                    Sollictudin nibh sit amet.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section benefit -->

            <!-- Section provide -->
            <section class="s-provide">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section text-center has-text mb-81">
                                <p class="sub-title">What Is Our Expertise?
                                </p>
                                <p class="title tf-animate-2">We Providing The <br>
                                    Best Agricultural Services</p>
                                <p class="text">
                                    Duis eleifend euismod arcu, nec faucibus mauris finibus id. Integer mattis, tellus
                                    non finibus
                                    rutrum.
                                </p>
                                <div class="img-item">
                                    <img class="tf-animate-1" src="images/item/rice-plant-2.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="grid-layout-3">
                                <?php foreach($services as $value):?>

                                    <div class="box-infor ic-hover img-hover style-1 wow fadeInUp" data-wow-delay="0s">
                                        <div class="image hover-icon hover-item">
                                            <img src="<?php echo $img_service . $value -> image ;?>"
                                                data-src="<?php echo $img_service . $value -> image ;?>" alt="" class=" lazyload">
                                            <div class="icon style-circle">
                                                <i class="icon-salad"></i>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="service-detail.html"
                                                class="title fs-23 fw-6 font-worksans hover-text-4">
                                                <?= $value->nom ?>
                                            </a>
                                            <p class="text font-nunito">
                                            <?= strip_tags( $value->description)  ?>
                                            </p>
                                            <a href="service.detail.php?mat_service=<?=$value->matricule_service ?>" class="tf-btn-read hover-text-4">Lire plus...</a>
                                        </div>
                                    </div>

                                <?php endforeach; ?>



                                <?php /*
                                <div class="box-infor ic-hover img-hover style-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="image hover-icon hover-item">
                                        <img src="images/widget/provide-item-2.jpg"
                                            data-src="./images/widget/provide-item-2.jpg" alt="" class=" lazyload">
                                        <div class="icon style-circle">
                                            <i class="icon-cow"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="service-detail.html"
                                            class="title fs-23 fw-6 font-worksans hover-text-4">
                                            Pure Cow's Milk
                                        </a>
                                        <p class="text font-nunito">
                                            Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                            nibh sit amet
                                            commodo nulla.
                                        </p>
                                        <a href="our-services.html" class="tf-btn-read hover-text-4">Read More</a>
                                    </div>
                                </div>

                                <div class="box-infor ic-hover img-hover style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="image hover-icon hover-item">
                                        <img src="images/widget/provide-item-3.jpg"
                                            data-src="./images/widget/provide-item-3.jpg" alt="" class=" lazyload">
                                        <div class="icon style-circle">
                                            <i class="icon-chicken-2
                                            "></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="service-detail.html"
                                            class="title fs-23 fw-6 font-worksans hover-text-4">
                                            Clean Chicken And Eggs
                                        </a>
                                        <p class="text font-nunito">
                                            Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                            nibh sit amet
                                            commodo nulla.
                                        </p>
                                        <a href="our-services.html" class="tf-btn-read hover-text-4">Read More</a>
                                    </div>
                                </div>

                                <div class="box-infor ic-hover img-hover style-1 wow fadeInUp" data-wow-delay="0s">
                                    <div class="image hover-icon hover-item">
                                        <img src="images/widget/provide-item-4.jpg"
                                            data-src="./images/widget/provide-item-4.jpg" alt="" class=" lazyload">
                                        <div class="icon style-circle">
                                            <i class="icon-fertilizer"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="service-detail.html"
                                            class="title fs-23 fw-6 font-worksans hover-text-4">
                                            Fertilizer Products
                                        </a>
                                        <p class="text font-nunito">
                                            Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                            nibh sit amet
                                            commodo nulla.
                                        </p>
                                        <a href="our-services.html" class="tf-btn-read hover-text-4">Read More</a>
                                    </div>
                                </div>

                                <div class="box-infor ic-hover img-hover style-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="image hover-icon hover-item">
                                        <img src="images/widget/provide-item-5.jpg"
                                            data-src="./images/widget/provide-item-5.jpg" alt="" class=" lazyload">
                                        <div class="icon style-circle">
                                            <i class="icon-lemon-slice"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="service-detail.html"
                                            class="title fs-23 fw-6 font-worksans hover-text-4">
                                            Tubers And Fruits
                                        </a>
                                        <p class="text font-nunito">
                                            Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                            nibh sit amet
                                            commodo nulla.
                                        </p>
                                        <a href="our-services.html" class="tf-btn-read hover-text-4">Read More</a>
                                    </div>
                                </div>

                                <div class="box-infor ic-hover img-hover style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="image hover-icon hover-item">
                                        <img src="images/widget/provide-item-6.jpg"
                                            data-src="./images/widget/provide-item-6.jpg" alt="" class=" lazyload">
                                        <div class="icon style-circle">
                                            <i class="icon-meat222"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="service-detail.html"
                                            class="title fs-23 fw-6 font-worksans hover-text-4">
                                            Meat Of Cattle And Poultry
                                        </a>
                                        <p class="text font-nunito">
                                            Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                            nibh sit amet
                                            commodo nulla.
                                        </p>
                                        <a href="our-services.html" class="tf-btn-read hover-text-4">Read More</a>
                                    </div>
                                </div> */?>

                            </div>

                        </div>
                    </div>
                </div>
            </section><!-- /.Section provide -->

            <!-- Section pricing -->
            <section class="s-pricing has-img-item tf-pt-0 ">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section text-center has-text mb-81">
                                <p class="sub-title">Pricing Tables
                                </p>
                                <p class="title text-anime-style-2">Pricing Plans For You</p>
                                <p class="text">
                                    Duis eleifend euismod arcu, nec faucibus mauris finibus id. Integer mattis, tellus
                                    non finibus
                                    rutrum.
                                </p>
                                <div class="img-item">
                                    <img class="tf-animate-1" src="images/item/rice-plant-2.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wg-pricing wow fadeInUp" data-wow-delay="0s">
                                <div class="type-plan">
                                    <i class="icon-barley"></i>
                                    <span class="font-worksans fw-6 fs-20">Basic Plan</span>
                                </div>
                                <p class="price font-farmhouse">
                                    <span class="dollar">$</span>
                                    <span>199</span>
                                    <span class="per">/per Month</span>
                                </p>
                                <div class="text">
                                    <p class="font-nunito">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio nunc.
                                    </p>
                                </div>
                                <ul class="benifit-list">
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>1 Buffet table</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>CustomFarming rules</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>Real-time rate shopping</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>100 freight shipments / month</p>
                                    </li>
                                </ul>
                                <a href="contact-us.html" class="tf-btn bg-white ">
                                    <span class="text-style cl-primary">
                                        Get Started
                                    </span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wg-pricing style-2 wow fadeInUp" data-wow-delay="0.1s ">
                                <div class="best-choice">
                                    <p class="fs-14">
                                        Best Choice
                                    </p>
                                </div>
                                <div class="type-plan">
                                    <i class="fa-solid fa-star"></i>
                                    <span class="font-worksans fw-6 fs-20">Advance Plan</span>
                                </div>
                                <p class="price font-farmhouse">
                                    <span class="dollar">$</span>
                                    <span>299</span>
                                    <span class="per">/per Month</span>
                                </p>
                                <div class="text">
                                    <p class="font-nunito">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio nunc.
                                    </p>
                                </div>
                                <ul class="benifit-list">
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>1 Buffet table</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>CustomFarming rules</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>Real-time rate shopping</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>100 freight shipments / month</p>
                                    </li>
                                </ul>
                                <a href="contact-us.html" class="tf-btn bg-white ">
                                    <span class="text-style cl-primary">
                                        Get Started
                                    </span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wg-pricing wow fadeInUp" data-wow-delay="0.2s">
                                <div class="type-plan">
                                    <i class="fa-solid fa-gem"></i>
                                    <span class="font-worksans fw-6 fs-20">Premium Plan</span>
                                </div>
                                <p class="price font-farmhouse">
                                    <span class="dollar">$</span>
                                    <span>399</span>
                                    <span class="per">/per Month</span>
                                </p>
                                <div class="text">
                                    <p class="font-nunito">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio nunc.
                                    </p>
                                </div>
                                <ul class="benifit-list">
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>1 Buffet table</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>CustomFarming rules</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>Real-time rate shopping</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>100 freight shipments / month</p>
                                    </li>
                                </ul>
                                <a href="contact-us.html" class="tf-btn bg-white ">
                                    <span class="text-style cl-primary">
                                        Get Started
                                    </span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="images/item/page-title-top.png" alt="">
                </div>
                <div class="s-img-item item-2">
                    <img src="images/item/page-title-top.png" alt="">
                </div>
            </section><!-- /.Section pricing -->

            <!-- Section testimonial -->
            <section class="s-testimonial-2 style-2">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-section">
                                <p class="sub-title">Testimonials From People Who Have Experienced It </p>
                                <p class="title text-anime-style-1">What Custommer Says?</p>
                                <div class="img-item">
                                    <img class="tf-animate-1" src="images/item/rice-plant-2.png" alt="" />
                                </div>
                                <div class="img-item item-2">
                                    <i class="icon-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter-wrap">
                                <div class="wg-counter style-5 style-6">
                                    <div class="icon style-circle">
                                        <i class="icon-barley"></i>
                                    </div>
                                    <div class="counter-item">
                                        <p class="title font-worksans fw-5 fs-18">
                                            Trust By Clients
                                        </p>
                                        <div class="counter">
                                            <div id="odometer" class="odometer style-6">10000</div>
                                            <span class="sub-odo color-secondary">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-item">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="s-slider">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="swiper-container slider-s-testimonial-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial style-2">
                                                <div class="comment">
                                                    <p class="caption fs-23 font-snowfall">
                                                        The Best Farm I Trust Uses Products
                                                    </p>
                                                    <p class="text font-worksans">
                                                        Having been a host farmer for three seasons, we’ve seen
                                                        firsthand
                                                        the difference this
                                                        internship makes in beginning
                                                        farmers and host farms alike. As a farmer it is difficult to
                                                        weigh
                                                        the benefits of
                                                        hosting young farmers. Fresh energy
                                                        and enthusiasm.
                                                    </p>
                                                </div>
                                                <div class="author-wrap">
                                                    <div class="left">
                                                        <div class="image-avt">
                                                            <img src="images/widget/author-comment.jpg" alt="">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="name-wrap">
                                                                <a href="#" class="name text-upper hover-text-4">
                                                                    CHRISTINE ROSE
                                                                </a>
                                                                <div class="wg-rating">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <p class="duty">
                                                                Director, Radical Orange Pty Ltd.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial style-2">
                                                <div class="comment">
                                                    <p class="caption fs-23 font-snowfall">
                                                        Rogue Farm Corps Has Helped Us Recruit And Retain Great!

                                                    </p>
                                                    <p class="text font-worksans">
                                                        As you know I am an organic wheat farmer here in Wyoming and we
                                                        had
                                                        one of driest and coldest winters on record. I used your
                                                        MycoApply
                                                        granular on my winter wheat and I am very pleased at what I am
                                                        seeing. The root systems are noticeably.
                                                    </p>
                                                </div>
                                                <div class="author-wrap">
                                                    <div class="left">
                                                        <div class="image-avt">
                                                            <img src="images/section/customer-say-3.jpg" alt="">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="name-wrap">
                                                                <a href="#" class="name text-upper hover-text-4">
                                                                    Sincerely
                                                                </a>
                                                                <div class="wg-rating">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <p class="duty">
                                                                General Agriculture Crop Consultant.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" btn-slide-testimonial-2 btn-next">
                        <img src="icons/slide-next-2.svg" alt="">
                    </div>
                    <div class=" btn-slide-testimonial-2 btn-prev">
                        <img src="icons/slide-prev-2.svg" alt="">
                    </div>
                </div>

                <div class="s-img-item item-1 scroll-element-3">
                    <img src="images/item/gree-field.jpg" data-src="./images/item/gree-field.jpg" alt=""
                        class="lazyload scale-1-1">
                </div>
                <div class="s-img-item item-2">
                    <img src="images/item/page-title-top.png" alt="" />
                </div>
            </section><!-- /.Section testimonial -->

            <!-- Section contact us -->
            <section class="s-contact-us style-3">
                <div class="section-wrap">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="content-left">

                                    <div class="image mb-30">
                                        <img src="images/section/s-contact.jpg" alt="./images/section/s-contact.jpg"
                                            class="lazyload" />
                                        <img src="images/item/leaf.png" alt=""
                                            class="img-item tf-animate__rotate-left" />
                                    </div>
                                    <ul class="contact-list">
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                    Farm Address
                                                </p>
                                                <p class="text">
                                                    Prinsengracht 250, 2501016 PM
                                                    Amsterdam Netherlands
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-address-book"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                    Contact Us
                                                </p>
                                                <p class="text">
                                                    Donalfarms@gmail.com <br>
                                                    Call Us 24/7: +1 987 654 3210
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-clock"></i>
                                            </div>
                                            <div class="infor">

                                                <p class="title">
                                                    Working Hours
                                                </p>
                                                <p class="text">
                                                    Mon - Fri: 8.00am - 18.00pm <br>
                                                    Sat: 9.00am - 17.00pm Holidays: Closes
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="content-section">
                                    <div class="heading-section style-3 has-text mb-50">
                                        <p class="sub-title">Let's Cooperate Together</p>
                                        <p class="title tf-animate-1">
                                            Contact Us Today!
                                        </p>
                                        <p class="text">
                                            We will reply you within 24 hours via email, thank you for contacting
                                        </p>
                                        <div class="img-item">
                                            <img class="tf-animate-1" src="images/item/rice-plant-2.png" alt="" />
                                        </div>
                                    </div>
                                    <form id="contactform" method="post" action="https://themesflat.co/html/donalfarm/contact/contact-process.php"
                                        novalidate="novalidate" class="form-send-message">
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Name*" aria-required="true" required />
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" class="form-control email" id="mail" name="mail"
                                                    placeholder="Email*" required />
                                            </fieldset>
                                        </div>
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone*" aria-required="true" required />
                                            </fieldset>
                                            <fieldset class="dropdown">
                                                <select name="text" id="Support">
                                                    <option value="You need to suport?" selected="">You need to
                                                        suport?
                                                    </option>
                                                    <option value="You need to suport? 1">You need to suport? 1
                                                    </option>
                                                    <option value="You need to suport? 2">You need to suport? 2
                                                    </option>
                                                    <option value="You need to suport? 3">You need to suport? 3
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="cols mb-30">
                                            <fieldset>
                                                <textarea name="message" id="message"
                                                    placeholder="Message..."></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="checkbox-item send-wrap">
                                            <label class="mb-0">
                                                <span class="text font-nunito">Agree to our terms and
                                                    conditions</span>
                                                <input type="checkbox" class="checkbox-item" checked>
                                                <span class="btn-checkbox"></span>
                                            </label>
                                            <button type="submit" class="tf-btn bg-white">
                                                <span class="text-style cl-primary">
                                                    Send Message
                                                </span>
                                                <span class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section><!-- /.Section contact us -->

            <!-- Section partner -->
            <section class="s-partner bg-white style-4">
                <div class="tf-container w-1780">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrap">
                                <div class="swiper-container slider-partner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide-partner">
                                                <div class="image">
                                                    <a href="#">

                                                        <img src="images/partner/wide-open.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">

                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/partner/sollio.png" alt="" class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">
                                                <div class="image">
                                                    <a href="#">

                                                        <img src="images/partner/syngenta.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">

                                                <div class="image">
                                                    <a href="#">

                                                        <img src="images/partner/strachan-valley.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">


                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/partner/new-holland.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">

                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/partner/stony-field.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section partner -->

        </div><!-- /.Main-content -->

        <?php include('includes/footer.php') ?>
   

    </div><!-- /#Wapper -->

    <!-- Open-search -->
    <div class="offcanvas offcanvas-top offcanvas-search" id="canvasSearch">
        <button class="btn-close-search" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="icon-close"></i>
        </button>
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas-body">
                        <form action="#" class="form-search-courses">
                            <div class="icon">
                                <i class="icon-keyboard"></i>
                            </div>
                            <fieldset>
                                <input class="" type="text" placeholder="Search for anything" name="text" tabindex="2"
                                    value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit">
                                    <i class="icon-magnifying-glass"></i>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.Open-search -->

    <!-- Prograss -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div><!-- /.Prograss -->

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/swiper.js"></script>
    <script type="text/javascript" src="js/odometer.min.js"></script>
    <script type="text/javascript" src="js/counter.js"></script>
    <script type="text/javascript" src="js/jquery-validate.js"></script>
    <script type="text/javascript" src="js/gsap-animation.js"></script>
    <script type="text/javascript" src="js/gsap.min.js"></script>
    <script type="text/javascript" src="js/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="js/Splitetext.js"></script>
    <script type="text/javascript" src="js/rellax.min.js"></script>
    <script>
        var rellax = new Rellax(".rellax");
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- /Javascript -->

</body>


<!-- Mirrored from themesflat.co/html/donalfarm/our-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:39 GMT -->
</html>