<?php
    include 'classes/slider.php'; 
    $slider = new Slider();
    $list_slider = $slider->show_slider();
?>
  <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <?php
                if ($list_slider != false)
                {
                    while($row = $list_slider->fetch_assoc())
                    {
                        if ($row["status"] == 1)
                        {
            ?>
            <div class="hero__items set-bg" data-setbg="img/hero/<?php echo $row['sliderImage'];?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6><?php echo $row['collectionName'];?></h6>
                                <h2><?php echo $row['sliderName'];?></h2>
                                <p><?php echo $row['description'];?></p>
                                <a href="shop.php" class="primary-btn">Mua Ngay <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        }
                    }
                }
            ?>
        </div>
    </section>
    <!-- Hero Section End -->