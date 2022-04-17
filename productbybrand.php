<?php
    include 'inc/header.php';
?>


<?php   //get brand ID
	if(isset($_GET['brandId'])  && $_GET['brandId'] != NULL) {
        $brandId = $_GET['brandId'];
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
                            <a href="./shop.php">Brand</a> 
                                                                                
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
    $getProductbybrand = $product->search_product_by_brand($brandId);
    if($getProductbybrand){
        while($row = $getProductbybrand->fetch_assoc()){
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
                                   <!--  <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div> -->
                                    <h5><?php echo $row['price'] ; ?> VNĐ</h5>
                                    <!-- <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                       
                    


<?php             
        }
    }
    else {
        echo "This brand is temporary out of stock!";
    }

?>

        </div>
    </div>
    </div>
</section>    

<?php
    include 'inc/footer.php';
?>