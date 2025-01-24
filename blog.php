<?php 
include('api/cle_api.php');
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
                                    <a href="index.php">Acceuil</a>
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
                                            <a href="blog.detail.php?mat_art=<?= $value->matricule ?>">
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
                                            </a>
                                            <div class="entry-date">
                                                <p class="day"><?= data_date($value->date,2) ?></p>
                                                <p class="month-year">
                                                <?= data_date($value->date,1) ?> <?= data_date($value->date,0) ?>
                                                </p>
                                            </div>
                                        </div>  
                                        <div class="content">
                                            <ul class="entry-meta">
                                                <li class="entry  author wow fadeInUp" data-wow-delay="0s">
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    <p>
                                                        <a class="" href="#">
                                                            <?php $nom_admin = info_admin($value->matricule_admin) ?>
                                                            <?= $nom_admin ->nom . ' '. $nom_admin ->prenom ?>
                                                        </a>
                                                    </p>
                                                </li>
                                                <li class="entry  tags wow fadeInUp" data-wow-delay="0.1s">
                                                    <i class="fa-solid fa-tag"></i>
                                                    <p>
                                                        <a href="javacrispt:void()"><?= info_cat_post($value->id_categorie)->nom ?></a>,
                                                        
                                                    </p>
                                                </li>
                                                <?php /*<li class="entry  comment wow fadeInUp" data-wow-delay="0.2s">
                                                    <i class="fa-solid fa-comment"></i>
                                                    <p>
                                                        <a href="#">0 Comments</a>
                                                    </p>
                                                </li> */?>
                                                <li class="entry  view wow fadeInUp" data-wow-delay="0.3s">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <p>
                                                        <a href="#"><?=  vues_posts($value->matricule) ?></a>
                                                    </p>
                                                </li>
                                            </ul>
                                            <h3 class="title fw-7 wow fadeInUp" data-wow-delay="0s">
                                                <a href="blog.detail.php?mat_art=<?= $value->matricule ?>">
                                                <?= $value->titre ?>
                                                    <?php /*
                                                    How to Care for Cows to have the Best
                                                    Quality Meat*/?>
                                                </a>
                                            </h3>
                                            <p class="text">
                                            <?=  limiterNombreCaracteres($value->content, 200)?>
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
                           <?php include('includes/side_rigth.php') ?>
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