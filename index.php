<?php
    include 'inc/include_header.php';
    include 'inc/header.php';
    include 'inc/slider.php';
    include 'inc/banner.php';
?>
<!-- <?php 
    $check =  Session::get('user_login');
    echo $check;
    echo Session::get('user_name');
    echo Session::get('user_role');
?> -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">SẢN PHẨM MỚI</li>
                        <!--<li data-filter=".new-arrivals">Mới về</li>
                        <li data-filter=".hot-sales">Giảm giá HOT</li>-->
                    </ul>
                </div>
            </div>
            <div class="row product__filter">

<?php 
    $getProduct = $product->show_product();
    $display_product_nums = 8;
    if($getProduct){
        for($i = 0; $i < $display_product_nums; $i++){
            if($row = $getProduct->fetch_assoc()){
                $image_list = $product->getImgByProductId($row['productId']);
                if($img = $image_list->fetch_assoc())
                {
                    $image_product = $img['image'];
                }
                $productTitle = $row['productName']." ".$row['model'];
                $productLink = vn_to_str($productTitle);
?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $image_product ; ?>">
                            <ul class="product__hover">
                                <li><a ><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="products/<?php echo $productLink ?>"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><?php echo $productTitle; ?></h6>
                            <a href="products/<?php echo $productLink ?>" class="add-cart">+ Thêm vào giỏ hàng</a>
                            
                            <h5><?php echo $fm->format_currency($row['price'])  ; ?> VNĐ</h5>
                            
                        </div>
                    </div>
                </div>
<?php
            }}}
?> 
            </div>
        </div>
    </section>
    <!-- Product Section End -->

   <?php //include 'inc/deal_product.php'; ?>

    <!-- Instagram Section Begin 
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Instagram Section End -->

   
<?php
    include 'inc/lastest_new.php';
    include 'inc/footer.php';
?>

   