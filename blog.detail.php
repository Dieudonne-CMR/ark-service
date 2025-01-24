<?php
include('api/cle_api.php');
if (isset($_GET['mat_art']) AND !empty($_GET['mat_art'])) {
    $mat_post=$_GET['mat_art'];
    $detail_post = recup_detail_post($mat_post);
    if(!empty($detail_post)):
        $titre= $detail_post->titre;
        $image= $detail_post->photo;
        $content= $detail_post->content;
        $date= $detail_post->date;
        $id_categorie = $detail_post->id_categorie;
        $matricule_admin = $detail_post->matricule_admin;
        // $date= $detail_post->date;
    else:
        header("location:blog.detail.php");
    endif;

}else{
    header("location:blog.detail.php");

} 
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/donalfarm/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:41 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>Ark Service <?= $titre ?></title>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description"
        content="<?= $titre ?>">
    <meta name="keywords"
        content="<?= $titre ?>">
    <meta name="author" content="Ark Service ">

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
    <div id="wrapper">

        <!-- main header start -->
        <?php include('includes/header.php') ?>
        <!-- main header end -->

        <?php /*<!-- Preloader -->
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
        </div><!-- /.Preloader --> */?>
 
        
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


        <!-- Page-title -->
        <div class="page-title page-blog-full-w  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="<?php echo $url_image .$image ?>" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                <?= $titre ?>
                                </p>
                                <h1 class="title">
                                <?= $titre ?>
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.php">Accueil</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="blog.php"> Articles</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">detail article</a>
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
        <div class="main-content page-blog-single">
            <div class="blog-single">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="content">
                                <h3 class="title-name fw-bold">
                                <?= $titre ?>
                                </h3>
                                <div class="entry-meta">
                                    <ul class="meta-list">
                                        <li class="entry author">
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                <a class="" href="#">
                                                    <?php $nom_admin = info_admin($matricule_admin) ?>
                                                    <?= $nom_admin ->nom . ' '. $nom_admin ->prenom ?>
                                                </a>
                                            </p>
                                        </li>
                                        <li class="entry date">
                                            <i class="fa-solid fs-14 fa-calendar"></i>
                                            <p class="">
                                                <a href="#">
                                                    <?= data_date($date); ?>
                                                </a>
                                            </p>
                                        </li>
                                        <li class="entry tags">
                                            <i class="fa-solid fa-tag"></i>
                                            <p>
                                                <a href="#"><?= info_cat_post($id_categorie)->nom ?></a>,
                                                <a href="#">Farm</a>
                                            </p>
                                        </li>
                                        <?php /*<li class="entry comment">
                                            <i class="fa-solid fa-comment"></i>
                                            <p>
                                                <a href="#">0 Comments</a>
                                            </p>
                                        </li> */?>
                                        <li class="entry view">
                                            <i class="fa-solid fa-eye"></i>
                                            <p>
                                                <a href="#"><?=  vues_posts($mat_post) ?></a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-image">
                                    <img class="lazyload" src="<?php echo $url_image .$image ?>"
                                        data-src="<?php echo $url_image .$image ?>" alt="">
                                </div>

                                <p class="text text-2">
                                    <?= $content ?>
                                </p>
                                <br>
 
                                <div class="blog-bot">
                                    <ul class="tags-list">
                                        <li><a href="#">bread</a></li>
                                        <li><a href="#">fruits</a></li>
                                        <li><a href="#">healthy</a></li>
                                    </ul>
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
                                <?php /*
                                <div class="comment-wrap">
                                    <h2 class="fw-bold font-worksans wow fadeInUp" data-wow-delay="0s">
                                        Comments
                                    </h2>
                                    <div class="author-wrap">
                                        <div class="author">
                                            <div class="image-avt">
                                                <img src="images/widget/author-comment.jpg" alt="">
                                            </div>
                                            <div class="entry">
                                                <a href="#"
                                                    class="entry-name font-worksans fw-6 text-upper hover-text-secondary">Christine
                                                    Rose</a>
                                                <p class=" font-nunito">
                                                    July 29, 2024 at 7:35 am
                                                </p>
                                            </div>
                                        </div>
                                        <a href="#post-comment-wrap"
                                            class="tf-btn btn-reply style-2 type-2 font-nunito">
                                            <i class="fa-solid fa-reply"></i>
                                            Reply
                                        </a>
                                    </div>
                                    <p class="comment font-nunito">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio nunc, egestas
                                        quis efficitur eu, tempus ut nisi.
                                        Suspendisse dignissim ut massa ac bibendum. Vivamus sit amet felis odio o.
                                        Phasellus a nisi eleifend, rhoncus massa
                                        vitae, sodales lacus.
                                    </p>
                                </div>
                                <div class="post-comment-wrap" id="post-comment-wrap">
                                    <h2 class="fw-bold font-worksans wow fadeInUp" data-wow-delay="0s">
                                        Leave a Comment
                                    </h2>
                                    <p class="sub-title font-nunito">
                                        Your email address will not be published. Required fields are marked *
                                    </p>
                                    <form action="#" class="form-post-comment">
                                        <div class="cols ">
                                            <fieldset>
                                                <input type="text" placeholder="Name*" required>
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" placeholder="Email*" required>
                                            </fieldset>
                                        </div>
                                        <div class="cols field-text">
                                            <textarea name="message" id="message" placeholder="Message..."
                                                required></textarea>
                                        </div>
                                        <div class="flex justify-center">
                                            <button type="submit" class="tf-btn">
                                                <span class="text-style">
                                                    Post Comment
                                                </span>
                                                <span class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div> */?>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <?php include('includes/side_rigth.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Main-content -->

        <!-- Footer -->
        
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
    <script type="text/javascript" src="js/rellax.min.js"></script>
    <script>
        var rellax = new Rellax(".rellax");
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- /Javascript -->

</body>


<!-- Mirrored from themesflat.co/html/donalfarm/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 08:36:41 GMT -->
</html>