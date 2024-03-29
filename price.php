<?php
    include 'inc/include_header.php';
?>

<?php   //get category ID
	if(isset($_GET['pricelv'])  && $_GET['pricelv'] != NULL) {
        $pricelv = $_GET['pricelv'];
    }
    else{
        // code mặc định trở về trang web cũ
        header("Location: 404.php");
        exit;
    }   

    if($pricelv == 0){
        $namePrice = "0 - 200.000";
    }
    elseif($pricelv == 1){
        $namePrice = "200.000 - 500.000";
    }
    elseif($pricelv == 2){
        $namePrice = "500.000 - 1.000.000";
    }
    elseif($pricelv == 3){
        $namePrice = "1.000.000 - 2.000.000";
    } 	      	                    
    elseif($pricelv == 4){
        $namePrice = "2.000.000 - 5.000.000";
    }
    elseif($pricelv == 5){
        $namePrice = "5.000.000+";
    }

    $title = "Sản phẩm ".$namePrice." VNĐ";
    include 'inc/header.php';
?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Sản Phẩm</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Trang Chủ</a>
                            <a href="./shop.php">Sản Phẩm</a>                                                    
                            <span>Giá từ: <?php echo $namePrice;?> VNĐ</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<section class="shop spad">
        <div class="container">

 <!-- begin category and brand -->
 <?php
    include 'inc/sidebar_in_shoppage.php';   
?>
         <!--end category and brand -->           

        <div class="row">
<?php 
    //get product that match category ID
    $getprice = $product->show_product_price_by_pagination($pricelv);

   // $getprice  = 
    if($getprice){
        while($row = $getprice->fetch_assoc()){
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
                                        <li><a><img src="img/icon/heart.png" alt=""></a></li>
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
        } ?>
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

                                    //this line is to find product that match Price
                                    $product_all = $product->search_product_by_price($pricelv);

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
                                    <a href="price/level-<?php echo $pricelv?>/page-<?php echo $page-1;?>" ><</a>
                                <?php
                                }
                                    // số trang hiển thị ra màn hình tối đa hiện tại là 3
                                    $start = $page> 1? $page -1: $page;
                                    $end = $page < $num_of_page? $page +1: $num_of_page;
                                    for($i=$start;$i<=$end;$i++){
                                        ?>
                                        <a <?php if($i == $page) { echo 'class="active"';} else {echo 'href="price/level-'.$pricelv.'/page-'.$i.'"';}?>><?php echo $i ?></a>
                                        <?php
                                    }
                                ?>
                                <!-- trang sau -->
                                <?php if($page<$num_of_page){?>
                                    <a href="price/level-<?php echo $pricelv?>/page-<?php echo $page+1;?>" >></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>          <!-- End pagination -->
                
<?php
    }
    else {           // if there is no product match
        echo "This Price is temporarily out of product!";
    }

?>
</section>    

<?php
    include 'inc/footer.php';
?>