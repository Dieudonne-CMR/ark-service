<?php 
include('api/cle_api.php');
include('api/api_article.php');
$obj_tous_post = recup_article();


?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/donalfarm/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:40 GMT -->
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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />

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

<body>
    <!-- Wrapper -->
    <di id="wrapper">

        <!-- main header start -->
        <?php include('includes/header.php') ?>
        <!-- main header end -->


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
        </div><!-- /Top-bar -->
        */ ?>

        <!-- Welcome -->
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
        </div><!-- /.Welcome -->

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
                                        <li class="item has-child">
                                            <a href="javascript:void(0)">Services</a>
                                            <ul class="sub-nav">
                                                <li>
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
                                        <li class="item has-child current-menu">
                                            <a href="javascript:void(0)">Blog</a>
                                            <ul class="sub-nav">
                                                <li>
                                                    <a href="blog-full-width.html">
                                                        <span>
                                                            Blog Full Width
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="current-item">
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
                                                    <li class="menu-item">
                                                        <a href="portfolio-details.html">Portfolio Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile" href="javascript:void(0)">
                                                    Shop
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="shop-products.html">Shop Product</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-details.html">Shop Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile" href="javascript:void(0)">
                                                    Services
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="our-services.html">Our Services</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="service-detail.html">Service Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children-mobile">
                                                <a class="item-menu-mobile current" href="javascript:void(0)">Blog
                                                    <i class="icon-arrow_down"></i></a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="blog-full-width.html">Blog Full Width</a>
                                                    </li>
                                                    <li class="menu-item current">
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
                                            <li class="item has-child">
                                                <a href="javascript:void(0)">Services</a>
                                                <ul class="sub-nav">
                                                    <li>
                                                        <a href="service-detail.html">
                                                            <span>
                                                                Service Detail
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="our-services.html">
                                                            <span>
                                                                Our Service
                                                            </span>
                                                        </a>
                                                </ul>
                                            </li>
                                            <li class="item has-child current-menu">
                                                <a href="javascript:void(0)">Blog</a>
                                                <ul class="sub-nav">
                                                    <li>
                                                        <a href="blog-full-width.html">
                                                            <span>
                                                                Blog Full Width
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="current-item">
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
        </header><!-- /.Header -->
        */ ?>
        
        <!-- Page-title -->
        <div class="page-title page-blog-full-w  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="images/page-title/blog-full-w.jpg" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                    Quelques Activites effectuer chez nous
                                </p>
                                <h1 class="title">
                                    Suivez nos actualites du moment
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Acceuil</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
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
        <div class="main-content">
            <div class="blog-right-sibdebar">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-right-sidebar-wrap">
                                <?php foreach ($obj_tous_post as $value): ?>
                                    <article class="article-blog-item style-2 mb-80">

                                        <div class="image">
                                            <div class="video-wrap">
                                                <img class="lazyload" data-src="<?php echo $url_image . $value -> photo ?>"
                                                    src="<?php echo $url_image . $value -> photo ?>" alt="">
                                                 <?php /*
                                                <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                    class="style-icon-play popup-youtube">
                                                    <i class="fa-solid fa-play"></i>
                                                    <div class="wave"></div>
                                                    <div class="wave-1"></div>
                                                </a>
                                                */?>
                                            </div>
                                            <div class="entry-date">
                                                <p class="day">08</p>
                                                <p class="month-year">
                                                    Jun 24
                                                </p>
                                            </div>
                                        </div>  
                                        <div class="content">
                                            <ul class="entry-meta">
                                                <li class="entry  author wow fadeInUp" data-wow-delay="0s">
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    <p>
                                                        <a class="" href="#">
                                                            By Hardson
                                                        </a>
                                                    </p>
                                                </li>
                                                <li class="entry  tags wow fadeInUp" data-wow-delay="0.1s">
                                                    <i class="fa-solid fa-tag"></i>
                                                    <p>
                                                        <a href="#">Agriculture</a>,
                                                        <a href="#">Farm</a>
                                                    </p>
                                                </li>
                                                <li class="entry  comment wow fadeInUp" data-wow-delay="0.2s">
                                                    <i class="fa-solid fa-comment"></i>
                                                    <p>
                                                        <a href="#">0 Comments</a>
                                                    </p>
                                                </li>
                                                <li class="entry  view wow fadeInUp" data-wow-delay="0.3s">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <p>
                                                        <a href="#">350 View</a>
                                                    </p>
                                                </li>
                                            </ul>
                                            <h3 class="title fw-7 wow fadeInUp" data-wow-delay="0s">
                                                <a href="blog-single.html">
                                                <?= $value->titre ?>
                                                    <?php /*
                                                    How to Care for Cows to have the Best
                                                    Quality Meat*/?>
                                                </a>
                                            </h3>
                                            <p class="text">
                                            <?= $value->content ?>
                                            <?php /*
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus odio,
                                                egestas vitae augue sed, vulputate viverra
                                                velit. Quisque fringilla viverra turpis, at condimentum arcu convallis sit
                                                amet.
                                                Class aptent taciti sociosqu ad litora
                                                torquent per conubia nostra...
                                                */?>
                                            </p>
                                            <div class="bot">
                                                <a class="tf-btn gap-35" href="blog.detail.php?mat_post=<?=$value->matricule?>"
                                                    <span class="text-style">
                                                        Continue Reading
                                                    </span>
                                                    <div class="icon">
                                                        <i class="icon-arrow_right"></i>
                                                    </div>
                                                </a>
                                                <div class="share">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-share-nodes"></i>
                                                    </div>
                                                    <p class="fw-5 font-worksans mr-23">
                                                        Share:
                                                    </p>
                                                    <ul class="social-list style-2">
                                                        <li class="item">
                                                            <a href="#">
                                                                <i class="icon-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#">
                                                                <i class="icon-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#">
                                                                <i class="fa-brands fa-skype"></i>
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="#">
                                                                <i class="fa-brands fa-telegram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 
                                    </article>
                                <?php endforeach; ?>

                                <?php /*
                                <article class="article-blog-item style-2 mb-80">
                                    <div class="image">
                                        <div class="video-wrap">
                                            <img class="lazyload" data-src="images/blog/blog-2.jpg"
                                                src="images/blog/blog-2.jpg" alt="">
                                            <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                class="style-icon-play popup-youtube">
                                                <i class="fa-solid fa-play"></i>
                                                <div class="wave"></div>
                                                <div class="wave-1"></div>
                                            </a>
                                        </div>
                                        <div class="entry-date">
                                            <p class="day">08</p>
                                            <p class="month-year">
                                                Jun 24
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul class="entry-meta">
                                            <li class="entry  author wow fadeInUp" data-wow-delay="0s">
                                                <i class="fa-solid fa-circle-user"></i>
                                                <p>
                                                    <a class="" href="#">
                                                        By Hardson
                                                    </a>
                                                </p>
                                            </li>
                                            <li class="entry  tags wow fadeInUp" data-wow-delay="0.1s">
                                                <i class="fa-solid fa-tag"></i>
                                                <p>
                                                    <a href="#">Agriculture</a>,
                                                    <a href="#">Farm</a>
                                                </p>
                                            </li>
                                            <li class="entry  comment wow fadeInUp" data-wow-delay="0.2s">
                                                <i class="fa-solid fa-comment"></i>
                                                <p>
                                                    <a href="#">0 Comments</a>
                                                </p>
                                            </li>
                                            <li class="entry  view wow fadeInUp" data-wow-delay="0.3s">
                                                <i class="fa-solid fa-eye"></i>
                                                <p>
                                                    <a href="#">350 View</a>
                                                </p>
                                            </li>
                                        </ul>
                                        <h3 class="title fw-7 wow fadeInUp" data-wow-delay="0s">
                                            <a href="blog-single.html">
                                                The Best Time to Harvest Corn Without Wilting
                                            </a>
                                        </h3>
                                        <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus odio,
                                            egestas vitae augue sed, vulputate viverra
                                            velit. Quisque fringilla viverra turpis, at condimentum arcu convallis sit
                                            amet.
                                            Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra...
                                        </p>
                                        <div class="bot">
                                            <a class="tf-btn gap-35" href="blog-single.html">
                                                <span class="text-style">
                                                    Continue Reading
                                                </span>
                                                <div class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </div>
                                            </a>
                                            <div class="share">
                                                <div class="icon">
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                                <p class="fw-5 font-worksans mr-23">
                                                    Share:
                                                </p>
                                                <ul class="social-list style-2">
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="icon-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="icon-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="fa-brands fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="fa-brands fa-telegram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <div class="block-quote type-2 mb-80 wow fadeInUp" data-wow-delay="0s">
                                    <div class="has-border">
                                        <div class="quote">
                                            <div class="icon style-circle">
                                                <i class="icon-quote"></i>
                                            </div>
                                            <p class="font-snowfall cite">
                                                A sustainable smart city embodies the fusion of technological
                                                advancements
                                                with
                                                a
                                                commitment to minimizing environmental
                                                impact. These cities harness the power of digital innovation.
                                            </p>
                                        </div>
                                        <div class="bot">
                                            <div class="meta-left">
                                                <div class="entry date">
                                                    <i class="fa-solid fs-14 fa-calendar"></i>
                                                    <p class="">
                                                        08 June 2024
                                                    </p>
                                                </div>
                                                <div class="entry tags">
                                                    <i class="fa-solid fa-tag"></i>
                                                    <p class="">
                                                        <a href="#" class="hover-text-secondary ">Agriculture</a>,
                                                        <a href="#" class="hover-text-secondary ">Farm</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="entry-author">
                                                <p>
                                                    <a href="#" class="hover-text-secondary">
                                                        Christine Rose
                                                    </a>
                                                    - Quote
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <article class="article-blog-item style-2 mb-80 ">
                                    <div class="image">
                                        <div class="video-wrap">
                                            <img class="lazyload" data-src="images/blog/blog-3.jpg"
                                                src="images/blog/blog-3.jpg" alt="">
                                            <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                class="style-icon-play popup-youtube">
                                                <i class="fa-solid fa-play"></i>
                                                <div class="wave"></div>
                                                <div class="wave-1"></div>
                                            </a>
                                        </div>
                                        <div class="entry-date">
                                            <p class="day">08</p>
                                            <p class="month-year">
                                                Jun 24
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul class="entry-meta">
                                            <li class="entry  author wow fadeInUp" data-wow-delay="0s">
                                                <i class="fa-solid fa-circle-user"></i>
                                                <p>
                                                    <a class="" href="#">
                                                        By Hardson
                                                    </a>
                                                </p>
                                            </li>
                                            <li class="entry  tags wow fadeInUp" data-wow-delay="0.1s">
                                                <i class="fa-solid fa-tag"></i>
                                                <p>
                                                    <a href="#">Agriculture</a>,
                                                    <a href="#">Farm</a>
                                                </p>
                                            </li>
                                            <li class="entry  comment wow fadeInUp" data-wow-delay="0.2s">
                                                <i class="fa-solid fa-comment"></i>
                                                <p>
                                                    <a href="#">0 Comments</a>
                                                </p>
                                            </li>
                                            <li class="entry  view wow fadeInUp" data-wow-delay="0.3s">
                                                <i class="fa-solid fa-eye"></i>
                                                <p>
                                                    <a href="#">350 View</a>
                                                </p>
                                            </li>
                                        </ul>
                                        <h3 class="title fw-7 wow fadeInUp" data-wow-delay="0s">
                                            <a href="blog-single.html">
                                                The Joy of Working Every Day on a Sheep Farm
                                            </a>
                                        </h3>
                                        <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus odio,
                                            egestas vitae augue sed, vulputate viverra
                                            velit. Quisque fringilla viverra turpis, at condimentum arcu convallis sit
                                            amet.
                                            Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra...
                                        </p>
                                        <div class="bot">
                                            <a class="tf-btn gap-35" href="blog-single.html">
                                                <span class="text-style">
                                                    Continue Reading
                                                </span>
                                                <div class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </div>
                                            </a>
                                            <div class="share">
                                                <div class="icon">
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                                <p class="fw-5 font-worksans mr-23">
                                                    Share:
                                                </p>
                                                <ul class="social-list style-2">
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="icon-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="icon-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="fa-brands fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="fa-brands fa-telegram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <div class="block-quote type-2 style-2 mb-80 wow fadeInUp" data-wow-delay="0s">
                                    <div class="has-border">
                                        <div class="quote">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-link"></i>
                                            </div>
                                            <p class="font-snowfall cite font-worksans fw-7">
                                                <a href="https://illuminationconsulting.com/blog"
                                                    class="hover-text-secondary text-white ">

                                                    Investing in Controlled Environment Agriculture with Confidence
                                                </a>
                                            </p>
                                        </div>
                                        <div class="bot">
                                            <div class="meta-left">
                                                <div class="entry date">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    <p>
                                                        08 June 2024
                                                    </p>
                                                </div>
                                                <div class="entry tags">
                                                    <i class="fa-solid fa-tag"></i>
                                                    <p>
                                                        <a href="#" class="hover-text-secondary">Agriculture</a>,
                                                        <a href="#" class="hover-text-secondary">Farm</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="entry-author">
                                                <a href="https://illuminationconsulting.com/blog/"
                                                    class="hover-text-secondary">
                                                    https://illuminationconsulting.com/blog/
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <article class="article-blog-item style-2 mb-80">
                                    <div class="image">
                                        <div class="video-wrap">
                                            <img class="lazyload" data-src="images/blog/blog-4.jpg"
                                                src="images/blog/blog-4.jpg" alt="">
                                            <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                class="style-icon-play popup-youtube">
                                                <i class="fa-solid fa-volume-high"></i>
                                                <div class="wave"></div>
                                                <div class="wave-1"></div>
                                            </a>
                                        </div>
                                        <div class="entry-date">
                                            <p class="day">08</p>
                                            <p class="month-year">
                                                Jun 24
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul class="entry-meta">
                                            <li class="entry  author wow fadeInUp" data-wow-delay="0s">
                                                <i class="fa-solid fa-circle-user"></i>
                                                <p>
                                                    <a class="" href="#">
                                                        By Hardson
                                                    </a>
                                                </p>
                                            </li>
                                            <li class="entry  tags wow fadeInUp" data-wow-delay="0.1s">
                                                <i class="fa-solid fa-tag"></i>
                                                <p>
                                                    <a href="#">Agriculture</a>,
                                                    <a href="#">Farm</a>
                                                </p>
                                            </li>
                                            <li class="entry  comment wow fadeInUp" data-wow-delay="0.2s">
                                                <i class="fa-solid fa-comment"></i>
                                                <p>
                                                    <a href="#">0 Comments</a>
                                                </p>
                                            </li>
                                            <li class="entry  view wow fadeInUp" data-wow-delay="0.3s">
                                                <i class="fa-solid fa-eye"></i>
                                                <p>
                                                    <a href="#">350 View</a>
                                                </p>
                                            </li>
                                        </ul>
                                        <h3 class="title fw-7 wow fadeInUp" data-wow-delay="0s">
                                            <a href="blog-single.html">
                                                The Case for Investing in Greenhouses
                                            </a>
                                        </h3>
                                        <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus odio,
                                            egestas vitae augue sed, vulputate viverra
                                            velit. Quisque fringilla viverra turpis, at condimentum arcu convallis sit
                                            amet.
                                            Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra...
                                        </p>
                                        <div class="bot">
                                            <a class="tf-btn gap-35" href="blog-single.html">
                                                <span class="text-style">
                                                    Continue Reading
                                                </span>
                                                <div class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </div>
                                            </a>
                                            <div class="share">
                                                <div class="icon">
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                                <p class="fw-5 font-worksans mr-23">
                                                    Share:
                                                </p>
                                                <ul class="social-list style-2">
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="icon-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="icon-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="fa-brands fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a href="#">
                                                            <i class="fa-brands fa-telegram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                */?>
                                <div class="blog-pagination">
                                    <ul>
                                        <li>
                                            <a class="active" href="javascript:void(0)">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tf-sidebar">
                                <div class="wg-author-farm mb-40">
                                    <div class="image-avt wow zoomIn">
                                        <img src="images/widget/author.jpg" alt="">
                                    </div>
                                    <a href="#" class="text-upper font-worksans name hover-text-secondary">Christine
                                        Rose</a>
                                    <p class="duty font-nunito">
                                        DonalFarm Editor Post Blog
                                    </p>
                                    <p class="text font-nunito">
                                        Suspendisse dignissim ut massa acdum. Vivamus sit amet felis odio. Phasellus a
                                        nisi eleifend, rhoncus massa.
                                    </p>
                                    <ul class="social-list style-3 style-2">
                                        <li class="item">
                                            <a href="#">
                                                <i class="icon-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="icon-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa-brands fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa-brands fa-telegram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-item sb-search">
                                    <h5 class="sb-title">
                                        Search
                                    </h5>
                                    <div class="sb-content">
                                        <form action="#" class="form-search style-1">
                                            <fieldset>
                                                <input type="text" placeholder="Write content..." required>
                                            </fieldset>
                                            <button type="submit" class="btn-search">
                                                <i class="icon-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <div class="sidebar-item sb-category">
                                    <h5 class="sb-title">
                                        Categories
                                    </h5>
                                    <div class="sb-content">
                                        <ul class="category-list">
                                            <li class="item">
                                                <a href="#">Farming</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">Livestock</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">Vegetables</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">Uncategorized</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">Organic</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item sb-latest-new">
                                    <h5 class="sb-title">
                                        Latest News
                                    </h5>
                                    <div class="sb-content">
                                        <ul class="latest-list">
                                            <li class="item img-hover">
                                                <div class="image hover-item">
                                                    <img src="images/widget/last-new-1.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="date">12 September 2024</p>
                                                    <a class="name-post " href="#">
                                                        FPAC Business Center
                                                        Continues to Deliver
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item img-hover">
                                                <div class="image hover-item">

                                                    <img src="images/widget/last-new-2.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="date">12 September 2024</p>
                                                    <a class="name-post " href="#">
                                                        Breaking Down Barriers
                                                        to Crop Insurance
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item img-hover">
                                                <div class="image hover-item">
                                                    <img src="images/widget/last-new-3.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="date">12 September 2024</p>
                                                    <a class="name-post " href="#">
                                                        The Potential of Virtual
                                                        Reality in Agrifood
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item sb-tag">
                                    <h5 class="sb-title">
                                        Tags
                                    </h5>
                                    <div class="sb-content">

                                        <ul class="tag-list">
                                            <li class="item">
                                                <a href="#">bread</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">fruits</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">healthy</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">juices</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">organic</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">vegatables</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Main-content -->

        <!-- Footer -->
        <?php include('includes/footer.php') ?>
        <!-- /Footer -->

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
    <script type="text/javascript" src="js/rellax.min.js"></script>
    <script>
        var rellax = new Rellax(".rellax");
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- /Javascript -->

</body>


<!-- Mirrored from themesflat.co/html/donalfarm/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:40 GMT -->
</html>