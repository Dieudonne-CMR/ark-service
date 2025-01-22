<?php 
include('api/cle_api.php');
include('api/api_services.php');
if(isset($_GET['mat_service']) && !empty($_GET['mat_service'])):
    $mat_serv= $_GET['mat_service'];
    $detail_service = Recuper_service_detail($mat_serv);
    // var_dump($detail_service);
    if(empty($detail_service)):
        header("location: services.php");
    else:
        $titre = $detail_service[0]->nom;
        $description = $detail_service[0]->description;
        $image =  $detail_service[0]->image;
    endif;

else:
    header("location: services.php");
endif;

?>


<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/donalfarm/service-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:39 GMT -->
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

<body>
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
                                        <li class="item has-child current-menu">
                                            <a href="javascript:void(0)">Services</a>
                                            <ul class="sub-nav">
                                                <li>
                                                    <a href="our-services.html">
                                                        <span>
                                                            Our Services
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="current-item">
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
                                                <a class="item-menu-mobile current" href="javascript:void(0)">
                                                    Services
                                                    <i class="icon-arrow_down"></i>
                                                </a>
                                                <ul class="sub-menu-mobile">
                                                    <li class="menu-item">
                                                        <a href="our-services.html">Our Services</a>
                                                    </li>
                                                    <li class="menu-item current">
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
                                                    <li>
                                                        <a href="service-detail.html">
                                                            <span>
                                                                Service Detail
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="current-item">
                                                        <a href="our-services.html">
                                                            <span>
                                                                Our Service
                                                            </span>
                                                        </a>
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
                                    our services detail
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="our-services.html"> Our Services </a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)"> Our Services Detail </a>
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
        <div class="main-content page-service-detail">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content">
                            <div class="swiper-container slider-service-detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="images/widget/slide-service.jpg"
                                                data-src="./images/widget/slide-service.jpg" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="images/widget/slide-service.jpg"
                                                data-src="./images/widget/slide-service.jpg" alt="" class="lazyload">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-service-detail btn-next style-2">
                                    <i class="icon-arrow_right"></i>
                                </div>
                                <div class="btn-service-detail btn-prev style-2">
                                    <i class="icon-arrow_left"></i>
                                </div>
                            </div>
                            <h2 class="title fw-7 text-anime-style-1">
                                Pure Cow's Milk
                            </h2>
                            
                            <div class="quote">
                                <p class="font-snowfall">
                                    Nulla accumsan sapien purus, at ultrices eros sagittis at. Duis leo purus,
                                    gravida
                                    ut consequat in, hendrerit a neque. Sed nec placerat odio, ut ultrices
                                    magna. Etiam
                                    in ligula pulvinar, semper dolor eu, commodo lorem. In interdum neque
                                    libero.
                                </p>
                            </div>

                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut aliquam
                                mauris.
                                Maecenas porta odio lorem, in aliquet diam pellentesque vel. Donec pulvinar mi
                                ipsum, a
                                eleifend est porta id. Ut rutrum, quam vestibulum placerat sodales, ex eros
                                tincidunt
                                ipsum, varius venenatis risus magna.Pellentesque imperdiet id velit eu lobortis.
                                Praesent metus tellus, venenatis ac volutpat ut, blandit ut arcu.
                            </p>

                            <div class="offer-list">
                                <div class="offer-wrap wow fadeInUp" data-wow-delay="0s">
                                    <p class="caption">Services offered</p>
                                    <ul class="list">
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>We are committed to not using pesticides</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Do not use preservatives</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Fresh Fruits & Vegetables</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Low price guaranteed with quality</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Environmental protection is the focus</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="offer-wrap wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="caption">Services offered</p>
                                    <ul class="list">
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>We are committed to not using pesticides</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Do not use preservatives</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Fresh Fruits & Vegetables</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Low price guaranteed with quality</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                                            <p>Environmental protection is the focus</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text text-2">
                                Fusce hendrerit urna vitae pretium fermentum. Cras scelerisque ornare aliquet.
                                Sed
                                dignissim nibh a est tincidunt euismod. Nunc tempus sapien a eros suscipit,
                                fermentum
                                viverra libero ullamcorper.Curabitur et nibh eu magna placerat suscipit quis sed
                                lacus.
                                Pellentesque vitae nisi sed elit pulvinar.
                            </p>
                            <p class="title-2">
                                Our Solutions & Benefits
                            </p>
                            <div class="solution">
                                <div class="wg-tabs style-5">
                                    <ul class="overflow-x-auto menu-tab">
                                        <li class="item active"><a href="javascript:void(0)" class="btn-tab">Solution
                                                1</a></li>
                                        <li class="item"><a href="javascript:void(0)" class="btn-tab">Solution
                                                2</a>
                                        </li>
                                        <li class="item"><a href="javascript:void(0)" class="btn-tab">Solution
                                                3</a>
                                        </li>
                                    </ul>
                                    <div class="widget-content-tab">
                                        <div class="widget-content-inner active">
                                            <p>Nunc tempus sem consequat lacus cursus, in laoreet urna molestie.
                                                Quisque
                                                interdum egestas urna eget semper. Mauris sollicitudin
                                                consectetur nulla
                                                eu fringilla. Praesent id hendrerit urna, id facilisis ex.
                                                Pellentesque
                                                quam dolor, posuere id mollis et, rutrum sed est.
                                            </p>
                                        </div>
                                        <div class="widget-content-inner">
                                            <p>Nunc tempus sem consequat lacus cursus, in laoreet urna molestie.
                                                Quisque
                                                interdum egestas urna eget semper. Mauris sollicitudin
                                                consectetur nulla
                                                eu fringilla. Praesent id hendrerit urna, id facilisis ex.
                                                Pellentesque
                                                quam dolor, posuere id mollis et, rutrum sed est.
                                            </p>
                                        </div>
                                        <div class="widget-content-inner">
                                            <p>Nunc tempus sem consequat lacus cursus, in laoreet urna molestie.
                                                Quisque
                                                interdum egestas urna eget semper. Mauris sollicitudin
                                                consectetur nulla
                                                eu fringilla. Praesent id hendrerit urna, id facilisis ex.
                                                Pellentesque
                                                quam dolor, posuere id mollis et, rutrum sed est.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text text-3">
                                Aenean ut pharetra metus, convallis tincidunt erat. Aliquam vel justo neque.
                                Etiam at
                                lectus et neque viverra interdum eget nec enim. Nullam eu suscipit ligula.
                                Aliquam at
                                massa lobortis. urabitur et nibh eu magna placerat suscipit quis sed lacus.
                                Pellentesque
                                vitae nisi sed elit pulvinar.
                            </p>
                            <div class="benefit">
                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0s">
                                    <div class="icon hover-icon">
                                        <i class="icon-tractor22"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-4">
                                        Modern Agro
                                        Machinery
                                    </a>
                                </div>
                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="icon hover-icon">
                                        <i class="icon-lemon-slice fs-40"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-4">
                                        Fresh Fruits
                                        & Vegetables
                                    </a>
                                </div>
                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon hover-icon">
                                        <i class="icon-barley fs-40"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-4">
                                        Wheat
                                        Harvest Season
                                    </a>
                                </div>
                            </div>
                            <p class="title-2 s2">
                                We’re Here to Help You
                            </p>
                            <div class="tf-accordion accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What proof do you need for Carer’s tickets?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Aenean ut pharetra metus, convallis tincidunt erat. Aliquam vel
                                            justo neque.
                                            Etiam at lectus et neque viverra interdum eget nec enim. Nullam eu
                                            suscipit
                                            ligula. Aliquam at massa lobortis, vulputate tellus sit amet, mollis
                                            mauris.
                                            Mauris feugiat metus eget velit tempus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Do I have to pay extra for the shows?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Under 2’s are free and will need a ticket. Tickets are free of
                                            charge but
                                            attract a
                                            booking fee to cover the cost of
                                            processing the booking. If you book an under 2 ticket please bring
                                            with you
                                            proof of
                                            age.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Can I bring my team or friends?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Under 2’s are free and will need a ticket. Tickets are free of
                                            charge but
                                            attract a
                                            booking fee to cover the cost of
                                            processing the booking. If you book an under 2 ticket please bring
                                            with you
                                            proof of
                                            age.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can I join the farm as a permanent member?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Under 2’s are free and will need a ticket. Tickets are free of
                                            charge but
                                            attract a
                                            booking fee to cover the cost of
                                            processing the booking. If you book an under 2 ticket please bring
                                            with you
                                            proof of
                                            age.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tf-sidebar tf-sidebar-2">
                            <div class="sidebar-item sb-category">
                                <h5 class="sb-title">
                                    Services Category
                                </h5>
                                <div class="sb-content">
                                    <ul class="category-list">
                                        <li class="item">
                                            <a href="#">General Question</a>
                                        </li>
                                        <li class="item">
                                            <a href="#">Product Questions</a>
                                        </li>
                                        <li class="item">
                                            <a href="#">Questions About The Tour</a>
                                        </li>
                                        <li class="item">
                                            <a href="#">How do I log in
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">How delivery works in Europe</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item-2 has-bg-1 infor-contact mb-40">
                                <p class="sub font-snowfall fs-30">
                                    DonalFarm Agriculture <br>
                                    Farm of laughter and happiness!
                                </p>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ex ligula,
                                    pulvinar ultrices justo sed.
                                </p>
                                <ul class="contact-list">
                                    <li>
                                        <i class="fa-solid fa-location-dot fs-17"></i>
                                        <p class="address">
                                            Prinsengracht 250, 2501016 PM
                                            Amsterdam Netherlands
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="phone-number fs-15">
                                            Call us: (234) 109-6666
                                        </p>
                                    </li>
                                    <li> <i class="icon-package-box"></i>
                                        <p class="email fs-15">
                                            Mail: Donalfarms@gmail.com
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-clock"></i>
                                        <p class="time-open fs-15">
                                            Mon - Sat: 8.00am - 18.00pm
                                        </p>
                                    </li>
                                </ul>


                            </div>
                            <div class="sidebar-item-2 get-in img-hover">
                                <div class="image hover-item">
                                    <img src="images/widget/gallery-item-9.jpg"
                                        data-src="./images/widget/gallery-item-9.jpg" alt="" class="lazyload">
                                </div>
                                <div class="img-item">
                                    <img class="item-1 tf-animate__rotate-left" src="images/item/leaf-4.png" alt="">
                                </div>
                                <div class="content">
                                    <p class="text font-farmhouse text-upper text-anime-style-1">
                                        We are here for you. <br>
                                        Get in Touch!
                                    </p>
                                    <a href="contact-us.html" class="tf-btn-read text-white hover-text-secondary">
                                        Contact Us
                                        Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- /.Main-content -->

        <!-- Footer -->
        <footer class="footer" id="footer-main">
            <div class="tf-container w-1290">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top">
                            <div class="footer-left">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="images/logo/logo-2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="footer-center">
                                <p class="font-snowfall">
                                    Farm of laughter and happiness!
                                </p>
                            </div>
                            <div class="footer-right">
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

            <div class="footer-inner">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="footer-inner-wrap footer-col-block">
                                <h4 class="footer-title footer-title-desktop mb-23">
                                    Contact Us!
                                </h4>
                                <h4 class="footer-title footer-title-mobile mb-23">
                                    Contact Us!
                                </h4>
                                <ul class="contact-list tf-collapse-content">
                                    <li>
                                        <i class="fa-solid fa-location-dot fs-17"></i>
                                        <p class="address">
                                            Prinsengracht 250, 2501016 PM
                                            Amsterdam Netherlands
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="phone-number fs-15">
                                            Call us: (234) 109-6666
                                        </p>
                                    </li>
                                    <li>
                                        <i class="icon-package-box"></i>
                                        <p class="email fs-15">
                                            Mail: Donalfarms@gmail.com
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-clock"></i>
                                        <p class="time-open fs-15">
                                            Mon - Sat: 8.00am - 18.00pm
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="footer-inner-wrap footer-col-block">
                                <h4 class="footer-title footer-title-desktop mb-23">
                                    News Posts
                                </h4>
                                <h4 class="footer-title footer-title-mobile mb-23">
                                    News Posts
                                </h4>
                                <ul class="new-post-list tf-collapse-content">
                                    <li class="item img-hover">
                                        <div class="image hover-item">
                                            <img src="images/section/f-new-post-1.jpg" alt="" />
                                        </div>
                                        <div class="content">
                                            <a href="#" class="title-post hover-text-secondary">
                                                Learn 10 Best Tips for New
                                                Formers
                                            </a>
                                            <p class="date-release">
                                                30 Oct, 2024
                                            </p>
                                        </div>
                                    </li>
                                    <li class="item img-hover">
                                        <div class="image hover-item">
                                            <img src="images/section/f-new-post--2.jpg" alt="" />
                                        </div>
                                        <div class="content">
                                            <a href="#" class="title-post hover-text-secondary">
                                                Farmer Sentiment Darkens
                                                Hopes Fade
                                            </a>
                                            <p class="date-release">
                                                30 Oct, 2024
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="footer-inner-wrap footer-col-block">
                                <h4 class="footer-title footer-title-desktop mb-28">
                                    Quick Links
                                </h4>
                                <h4 class="footer-title footer-title-mobile mb-28">
                                    Quick Links
                                </h4>
                                <ul class="link-list tf-collapse-content">
                                    <li class="item">

                                        <a href="about-us.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Learn About Us
                                        </a>
                                    </li>
                                    <li class="item">

                                        <a href="our-services.html">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Services We Provide</a>
                                    </li>
                                    <li class="item">
                                        <a href="portfolio-style-1.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            View Recent Projects</a>
                                    </li>
                                    <li class="item">
                                        <a href="our-farmers.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Meet The Farmers</a>
                                    </li>
                                    <li class="item">
                                        <a href="coming-soon.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Up Coming Events</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-inner-wrap">
                                <h4 class="footer-title fs-20">
                                    Subscribe Newsletter
                                </h4>
                                <form id="subscribe-form" method="post" accept-charset="utf-8" data-mailchimp="true"
                                    action="#" class=" form-newsletter form-email style-2">
                                    <div id="subscribe-content" class="w-100">
                                        <input id="subscribe-email" type="email" name="email-form" class="email style-2"
                                            placeholder="Email address*" aria-required=" true" required>
                                        <button id="subscribe-button" type="button"
                                            class="tf-btn full bg-white scale-40">
                                            <span class="text-style cl-primary">
                                                Subscribe Now!
                                            </span>
                                            <span class="icon">
                                                <i class="fa-solid fa-paper-plane fs-14"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <div id="subscribe-msg"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tf-container w-1290">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom">
                            <p class="no-copy font-nunito">
                                Copyright © 2024 Donal Farm by
                                <span>
                                    <a href="https://themeforest.net/user/themesflat/portfolio">
                                        Themesflat</a>.</span>
                                All Rights Reserved.
                            </p>
                            <ul class="policy-list">
                                <li class="item">
                                    <a href="#">
                                        Confidentiality & Privacy
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        Legal Information
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        Return and Refund Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-item item-1">
                <img src="images/item/grass-2.png" alt="">
            </div>
            <div class="img-item item-2 wow zoomIn">
                <div class="scroll-element-4">
                    <img src="images/item/silo.png" alt="">
                </div>
            </div>
        </footer><!-- /Footer -->

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


<!-- Mirrored from themesflat.co/html/donalfarm/service-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:39 GMT -->
</html>