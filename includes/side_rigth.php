<div class="tf-sidebar">
    <?php /*<div class="wg-author-farm mb-40">
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
    </div> */?>
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
                <?php foreach( recup_category() as $value):?>
                    <li class="item">
                        <a href="#"><?=$value->nom ?></a>
                    </li>
                <?php endforeach; ?>

                <?php /*<li class="item">
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
                </li> */?>
            </ul>
        </div>
    </div>
    <div class="sidebar-item sb-latest-new">
        <h5 class="sb-title">
            Derniers articles
        </h5>
        <div class="sb-content">
            <ul class="latest-list">
            <?php foreach ($obj_tous_post as $kys => $value): ?>
                <?php if($kys <=2): ?>

                <li class="item img-hover">
                    <div class="image hover-item">
                        <img src="<?php echo $url_image . $value -> photo ?>" alt="">
                    </div>
                    <div class="content">
                        <p class="date"><?= data_date($value->date) ?></p>
                        <a class="name-post " href="#">
                        <?= limiterNombreCaracteres($value->content,25) ?>
                        </a>
                    </div>
                </li>
                <?php else: break ; endif ?>
            <?php endforeach ?>
                <?php /*<li class="item img-hover">
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
                </li> */?>

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