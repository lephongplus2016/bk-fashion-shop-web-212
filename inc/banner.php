<?php
    include 'classes/banner.php'; 
    $banner = new Banner();
    $list_banner = $banner->show_banners_active();
?>
 <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
            <?php
                if ($list_banner != false)
                {
                    if($row = $list_banner->fetch_assoc())
                    {
                        if ($row["status"] == 1)
                        {
            ?>
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="img/banner/<?php echo $row['bannerImage'];?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2><?php echo $row['bannerName'];?></h2>
                            <a href="shop.php">Mua ngay</a>
                        </div>
                    </div>
                </div>
            <?php
                        }
                    }
                    if($row = $list_banner->fetch_assoc())
                    {
                        if ($row["status"] == 1)
                        {
            ?>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="img/banner/<?php echo $row['bannerImage'];?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2><?php echo $row['bannerName'];?></h2>
                            <a href="shop.php">Mua ngay</a>
                        </div>
                    </div>
                </div>
            <?php
                        }
                    }
                    if($row = $list_banner->fetch_assoc())
                    {
                        if ($row["status"] == 1)
                        {
            ?>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="img/banner/<?php echo $row['bannerImage'];?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2><?php echo $row['bannerName'];?></h2>
                            <a href="shop.php">Mua ngay</a>
                        </div>
                    </div>
                </div>
            <?php
                        }
                    }
                }
            ?>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->