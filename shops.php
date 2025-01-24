<?php 
    include('api_shops/cle_api_shop.php') ;
    $produits=  recup_produict();
    // $info_boutique= info_boutique();
    // $devise=$info_boutique -> code_iso_devise;
    // var_dump($produits);
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/donalfarm/shop-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:30 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>Ark service</title>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description"
        content="Ark service">
    <meta name="keywords"
        content="Ark Service">
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="css/drift-basic.min.css" />
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
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

        <!-- Page-title -->
        <div class="page-title page-shop-detail  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="images/page-title/shop-detail.jpg" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content center">
                                <p class="sub-title">
                                    Buy Health Foods At Our Store
                                </p>
                                <h1 class="title">
                                    Shop products
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)"> Shop Products </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="images/item/grass-6.png" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content page-shop-product pt-0">
            <div class="tf-container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="tf-sidebar">
                            <?php /*
                            <div class="sidebar-item sb-category">
                                <h5 class="sb-title">
                                    Categories
                                </h5>
                                <div class="sb-content">
                                    <ul class="category-list">
                                        <li class="item">
                                            <a href="#tf-shop-control">Jam And Jelly (2)</a>
                                        </li>
                                        <li class="item">
                                            <a href="#tf-shop-control">Superfood (5)
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#tf-shop-control">Vegetables (6)</a>
                                        </li>
                                        <li class="item">
                                            <a href="#tf-shop-control">Premium Nuts (3)</a>
                                        </li>
                                        <li class="item">
                                            <a href="#tf-shop-control">Detox Drinks (1)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> */?>
                            <?php /*
                                <div class="sidebar-item ">
                                    <h5 class="sb-title">
                                        Color
                                    </h5>
                                    <div class="sb-content sb-color">
                                        <ul class="color-list">
                                            <li class="color-1"></li>
                                            <li class="active color-2"></li>
                                            <li class="color-3"></li>
                                            <li class="color-4"></li>
                                            <li class="color-5"></li>
                                            <li class="color-6"></li>
                                            <li class="color-7"></li>
                                        </ul>
                                    </div>
                                </div>
                                */?>
                            <?php /*<div class="sidebar-item ">
                                <h5 class="sb-title">
                                    Filter by Price
                                </h5>
                                <div class="sb-content sb-filter-price">
                                    <div class="range-slider">
                                        <div id="range-two-val"></div>
                                        <div class="bottom">
                                            <div class="price-wrap">
                                                <span class="text font-nunito">
                                                    Price:
                                                </span>
                                                <div class="value">
                                                    <div id="skip-value-lower"></div>
                                                    <span class="line">


                                                    </span>
                                                    <div id="skip-value-upper"></div>
                                                </div>
                                            </div>
                                            <a href="#"
                                                class="tf-btn-read btn-filter font-worksans fw-5 hover-text-4">Filter</a>
                                        </div>
                                    </div>

                                </div>
                            </div> */?>

                            <div class="sidebar-item sb-latest-new">
                                <h5 class="sb-title">
                                    Produicts recents
                                </h5>
                                <div class="sb-content sb-popular-product">
                                    <ul class="latest-list style-2">
                                    <?php foreach($produits as $kys=>$value): ?>
                                        <?php if( $kys<=2): ?>
                                            <li class="item img-hover">
                                                <div class="image hover-item">
                                                    <img src="<?= $image_produit . $value->lien_img_vedette ?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <a href="product.detail.php?mat_pro=<?=  $value -> mat_article ?>" class="name font-worksans fw-5 hover-text-4">
                                                        <?= limiterNombreCaracteres($value ->nom_art,50) ?>
                                                    </a>
                                                    <div class="pricing-star">
                                                        <span class=" price font-worksans fw-6"><?=  $value ->prix_reel ?> Fcfa</span>
                                                        <div class="wg-rating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php else: break; endif ?>
                                    <?php endforeach ?>

                                        <?php /*<li class="item img-hover">
                                            <div class="image hover-item">

                                                <img src="images/widget/sb-new-2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="#" class="name font-worksans fw-5 hover-text-4">
                                                    Green prganic mix
                                                    smoothie for everyday
                                                </a>
                                                <div class="pricing-star">
                                                    <span class=" price font-worksans fw-6">$3.00</span>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="item img-hover">
                                            <div class="image hover-item">
                                                <img src="images/widget/sb-new-3.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="#" class="name font-worksans fw-5 hover-text-4">
                                                    Green prganic mix
                                                    smoothie for everyday
                                                </a>
                                                <div class="pricing-star">
                                                    <span class=" price font-worksans fw-6">$3.00</span>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        */?>

                                    </ul>
                                </div>
                            </div>

                            <?php /* <div class="sidebar-item sb-tag">
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
                            </div> */?>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tf-shop-control" id="tf-shop-control">
                            <div class="control-left">
                                <div class="btn-view view-grid">
                                    <i class="fa-solid fa-grip"></i>
                                </div>
                                <div class="btn-view view-list">
                                    <i class="fa-solid fa-list"></i>
                                </div>
                                <p class="font-worksans fw-5">
                                    Resultats 1–15 of 30 
                                </p>
                            </div>

                            <div class="control-right">
                                <div class="tf-control-sorting">
                                    <div class="tf-dropdown-sort">
                                        <div class="tf-btn style-2" data-bs-toggle="dropdown">
                                            <span class="text-sort-value">Default sorting</span>
                                            <i class="icon-arrow_down"></i>
                                        </div>
                                        <div class="dropdown-menu ">
                                            <div class="select-item ">
                                                <span class="text-value-item">
                                                    New Post
                                                </span>
                                            </div>
                                            <div class="select-item">
                                                <span class="text-value-item">
                                                    Regular Post
                                                </span>
                                            </div>
                                            <div class="select-item active">
                                                <span class="text-value-item">
                                                    Lastest Posts
                                                </span>
                                            </div>
                                            <div class="select-item ">
                                                <span class="text-value-item">
                                                    All Post
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="wg-shop-content ">
                            <div class="grid-layout-3 gap-30-20">
                                <?php foreach($produits as $value): ?>
                                    <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">
                                        <a href="product.detail.php?mat_pro=<?=  $value -> mat_article ?>">
                                            <div class="image">
                                                <img src="<?= $image_produit . $value->lien_img_vedette ?>" data-src="<?= $image_produit . $value->lien_img_vedette ?>" style="height: 228px; width:216px" alt=""
                                                    class="lazyload">
                                            </div>
                                        </a>
                                        <a href="product.detail.php?mat_pro=<?=  $value -> mat_article ?>" class="name-product font-worksans hover-text-4">
                                        <?= $value ->nom_art ?>
                                        </a>
                                        <div class="pricing-star">
                                            <div class="price-wrap">

                                                <span class=" price-2"><?=  $value ->prix_reel ?> Fcfa  <?=''// $devise ?></span>
                                            </div>
                                            <div class="wg-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-btn-list">
                                            <a href="product.detail.php?mat_pro=<?=  $value -> mat_article ?>" class="icon shoping">

                                                <div class="tt-text">

                                                    <p>
                                                        Add to card
                                                    </p>
                                                </div>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                            <a href="#" class="icon white-list">
                                                <div class="tt-text">

                                                    <p>
                                                        Add Whitelist
                                                    </p>
                                                </div>
                                                <i class="fa-solid fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon view-product">
                                                <div class="tt-text">

                                                    <p>
                                                        Quick View
                                                    </p>
                                                </div>
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon">
                                                <div class="tt-text">

                                                    <p>
                                                        Compare
                                                    </p>
                                                </div>
                                                <i class="fa-solid fa-repeat"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php /*

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <ul class="trendy-list">
                                        <li class="trendy-item ">
                                            <p class="color-1">Hot</p>
                                        </li>
                                    </ul>
                                    <div class="image">
                                        <img src="images/item/vimto.png" data-src="./images/item/vimto.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Vimto Squash Remix
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-1">$3.44 </span>

                                            <span class=" price-2">$2.87</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.2s">
                                    <ul class="trendy-list">
                                        <li class="trendy-item ">
                                            <p class="color-1">Sale</p>
                                        </li>

                                    </ul>
                                    <div class="image">
                                        <img src="images/item/bag.png" data-src="./images/item/bag.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Bag Of Succulent Oranges
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">

                                            <span class=" price-1">$5.25</span>

                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">
                                    <ul class="trendy-list">
                                        <li class="trendy-item ">
                                            <p class="color-2">New</p>
                                        </li>
                                        <li class="trendy-item ">
                                            <p class="color-3">Hot</p>
                                        </li>

                                    </ul>
                                    <div class="image">
                                        <img src="images/item/macaroni.png" data-src="images/item/macaroni.png"
                                            alt="" class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Iceland Macaroni Cheese
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">

                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.1s">

                                    <div class="image">
                                        <img src="images/item/extre-budweiser.png"
                                            data-src="./images/item/extre-budweiser.png" alt="" class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Extreme Budweiser
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$2.87</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.2s">
                                    <ul class="trendy-list">

                                        <li class="trendy-item ">
                                            <p class="color-2">New</p>
                                        </li>
                                        <li class="trendy-item ">
                                            <p class="color-4">Seasonal</p>
                                        </li>
                                    </ul>
                                    <div class="image">
                                        <img src="images/item/sitema.png" data-src="./images/item/sitema.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Sitema BakeIT Plastic Box
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">

                                    <div class="image">
                                        <img src="images/item/avocado.png" data-src="./images/item/avocado.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Handmade And Created
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$5.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.1s">

                                    <div class="image">
                                        <img src="images/item/banana.png" data-src="./images/item/banana.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Avocado The Most Nutrient
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$2.87</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.2s">

                                    <div class="image">
                                        <img src="images/item/flover.png" data-src="./images/item/flover.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Golden Curcuma Flavored
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">
                                    <ul class="trendy-list">

                                        <li class="trendy-item ">
                                            <p class="color-3">Hot</p>
                                        </li>

                                    </ul>
                                    <div class="image">
                                        <img src="images/item/dense.png" data-src="./images/item/dense.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Dense Superfood Available
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <ul class="trendy-list">

                                        <li class="trendy-item ">
                                            <p class="color-3">Hot</p>
                                        </li>

                                    </ul>
                                    <div class="image">
                                        <img src="images/item/beef.png" data-src="./images/item/beef.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Organic Beef Box 1kg
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0.2s">
                                    <ul class="trendy-list">

                                        <li class="trendy-item ">
                                            <p class="color-4">Seasonal</p>
                                        </li>

                                    </ul>
                                    <div class="image">
                                        <img src="images/item/from.png" data-src="./images/item/from.png" alt=""
                                            class="lazyload">
                                    </div>
                                    <a href="shop-details.html" class="name-product font-worksans hover-text-4">
                                        Orange Juice From Fruits
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                            <span class=" price-2">$3.00</span>
                                        </div>
                                        <div class="wg-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-btn-list">
                                        <a href="shop-details.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        <a href="#" class="icon white-list">
                                            <div class="tt-text">

                                                <p>
                                                    Add Whitelist
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon view-product">
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon">
                                            <div class="tt-text">

                                                <p>
                                                    Compare
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-repeat"></i>
                                        </a>
                                    </div>
                                </div> */?>

                            </div>
                        </div>

                        <div class=" tf-page-pagination">
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
            </div>

        </div><!-- /.Main-content -->

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
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/swiper.js"></script>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/rellax.min.js"></script>
    <script>
        var rellax = new Rellax(".rellax");
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- /Javascript -->

</body>


<!-- Mirrored from themesflat.co/html/donalfarm/shop-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:35 GMT -->
</html>