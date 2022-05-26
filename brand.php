<?php
    include 'inc/include_header.php';
    include 'inc/header.php';
?>


<?php   //get brand ID
	if(isset($_GET['id'])  && $_GET['id'] != NULL) {
        $brandId = $_GET['id'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='404.php'</script>";
    }   
?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>   
                            <a href="./shop.php">Thương Hiệu</a> 
                                                                                
                            <span>
                            <?php
				               $getNamebrand = $brand->getNameBrand($brandId);
	      		                if($getNamebrand){
	      			                while($row = $getNamebrand->fetch_assoc()){
	      				                $nameBrand = $row['brandName'];
	      			                }	
	      		                }
	      	                    ?>
                                <p><?php echo $nameBrand;?> </p>
                            </span>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


<section class="shop spad">
        <div class="container">

            <!-- begin brand and brand -->
           <?php
    include 'inc/sidebar_in_shoppage.php';
   
?>
         <!--end brand and brand -->

        <div class="row">
<?php 
    //get product that match brand ID
    $getbrand = $product->show_product_brand_by_pagination($brandId);

    if($getbrand){
        while($row = $getbrand->fetch_assoc()){
            $image_list = $product->getImgByProductId($row['productId']);
            while($i = $image_list->fetch_assoc())
                {
                    $image_product = $i['image'];
                    break;
                }
?>
 

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $image_product ; ?>">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="shop-details.php?productId=<?php echo $row["productId"] ?>"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><?php echo $row['productName'] ; ?></h6>
                                    <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>                                   
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

                                    //this line is to find product that match category
                                    $product_all = $product->search_product_by_brand($brandId);

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
                                <a href="brand.php?id=<?php echo $brandId?>&page=<?php if($page>1) {echo $page-1;}  else {echo $page;}?>" ><</a>
                                <?php
                                    // số trang hiển thị ra màn hình tối đa hiện tại là 3
                                    $start = $page> 1? $page -1: $page;
                                    $end = $page < $num_of_page? $page +1: $num_of_page;
                                    for($i=$start;$i<=$end;$i++){
                                        ?>
                                        <a <?php if($i == $page) { echo 'class="active"';} ?> href="brand.php?id=<?php echo $brandId?>&page=<?php echo $i ?>"><?php echo $i ?></a>
                                    <?php
                                    }
                                ?>
                                <!-- trang sau -->
                                <a href="brand.php?id=<?php echo $brandId?>&page=<?php if($page<$num_of_page) {echo $page+1;}  else {echo $num_of_page;}?>" >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    
               <!-- End pagination -->
<?php
    }
    else {   // if there is no product match
        echo "This brand is temporarily out of stock!";
    }

?>



</section>    

<?php
    include 'inc/footer.php';
?>