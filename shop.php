<?php
    include 'inc/include_header.php';
    $title = "Sản phẩm";
    include 'inc/header.php';
?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Sản phẩm</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Trang chủ</a>
                            <span>Sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            
<?php
    include 'inc/sidebar_in_shoppage.php';
?>

            <div class="row">

<?php 
    $getProduct = $product->show_product_by_pagination();
    if($getProduct){
        while($row = $getProduct->fetch_assoc()){
            $image_list = $product->getImgByProductId($row['productId']);
            while($i = $image_list->fetch_assoc())
            {
                $image_product = $i['image'];
                break;
            }
            $productTitle = $row['productName']." ".$row['model'];
            $productLink = vn_to_str($productTitle);
?>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $image_product ; ?>">
                                    <ul class="product__hover">
<!--                                         <li><a><img src="img/icon/heart.png" alt=""></a></li>
 -->                                        <li><a href="products/<?php echo $productLink ?>"><img src="img/icon/search.png" alt=""></a></li>
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
        }
    }

?>

        </div>
                    <!-- pagination -->
                    <div class="row">
                        <?php
                                    $number_of_product_per_page = 9;
                                    if(!isset($_GET['page'])){
                                        $page = 1;
                                    }else{
                                        $page = $_GET['page'];
                                    }
                                    $product_all = $product->show_product(); 
                                    $num_of_product = mysqli_num_rows($product_all);
                                    $num_of_page = ceil($num_of_product/$number_of_product_per_page);
                                    $index_page_show = ($page-1)*$number_of_product_per_page +1;

                                ?>
                        <div class="col-lg-6">
                            <!-- phần thống kê hiển thị sản phẩm -->
                            <p>Hiển thị <?php echo $index_page_show."-".($index_page_show+$number_of_product_per_page-1); ?> trong tổng số <?php echo  $num_of_product; ?> kết quả</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="product__pagination">
                                <!-- trang trước -->
                                <?php if ($page>1) {?>
                                    <a href="shop/page-<?php echo $page-1;?>" ><</a>
                                <?php
                                }
                                    // số trang hiển thị ra màn hình tối đa hiện tại là 5
                                    $start = $page> 2? $page -2: 1;
                                    $end = $page < $num_of_page -1 ? $page + 2: $num_of_page;
                                    for($i=$start;$i<=$end;$i++){
                                        ?>
                                        <a <?php if($i == $page) { echo 'class="active"';} else {echo 'href="shop/page-'.$i.'"';} ?>><?php echo $i ?></a>
                                        <?php
                                    }
                                ?>
                                <!-- trang sau -->
                                <?php if ($page<$num_of_page) {?>
                                    <a href="shop/page-<?php echo $page+1;?>" >></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

  <?php
    include 'inc/footer.php';
?>

   