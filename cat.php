<?php
    include 'inc/include_header.php';
    include 'inc/header.php';
?>

<?php   //get category ID
	if(isset($_GET['type'])  && $_GET['type'] != NULL) {
        $categoryName = $_GET['type'];
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
                        <h4>Sản Phẩm</h4>
                        <div class="breadcrumb__links">
<<<<<<< HEAD
                            <a href="./index.php">Trang Chủ</a>
                            <a href="./shop.php">Sản Phẩm</a>
                            <a href="./shop.php">Phân Loại</a>                                                    
=======
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>                                                  
>>>>>>> 46031cc31be1bc0b80515bb23aa3eba00a6b9190
                            <span>
                            <?php
				               $getCategory = $category->getCategoryByNameLink($categoryName);
	      		                if($getCategory){
	      			                $categoryId = $getCategory['categoryId'];
                                    $nameCategory = $getCategory['categoryName'];	
	      		                }
                                else echo '<script>alert("false")</script>';
	      	                    ?>
                                <p><?php echo $nameCategory;?> </p>
                            </span> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!-- Breadcrumb Section End -->
    

<section class="shop spad">
        <div class="container">

 <!-- begin category and brand -->
 <?php
    include 'inc/sidebar_in_shoppage.php';   
?>
         <!--end category and brand -->           

        <div class="row">
<?php 
    //get product that match category ID and show pagination
    $getcat = $product->show_product_category_by_pagination($categoryId);
    
    if($getcat){
        while($row = $getcat->fetch_assoc()){
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
        }
?>
                </div> <!-- pagination -->                   
                    <div class="row">
                        <?php
                                    $number_of_product_per_page = 9;
                                    if(!isset($_GET['page'])){
                                        $page = 1;
                                    }else{
                                        $page = $_GET['page'];
                                    }

                                    //this line is to find product that match category
                                    $product_all = $product->search_product_by_category($categoryId);
                                    if($product_all){
                                        $num_of_product = mysqli_num_rows($product_all);
                                        $num_of_page = ceil($num_of_product/$number_of_product_per_page);
                                        $index_page_show = ($page-1)*$number_of_product_per_page +1;
                                    }

                                ?>
                        <div class="col-lg-6">
                            <!-- phần thống kê hiển thị sản phẩm -->
                            <p>Hiển thị <?php echo $index_page_show."-".($index_page_show+$number_of_product_per_page-1); ?> trong tổng số <?php echo  $num_of_product; ?> kết quả</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="product__pagination">
                                <!-- trang trước -->
                                <a href="category/<?php echo $categoryName?>/page-<?php if($page>1) {echo $page-1;}  else {echo $page;}?>" ><</a>
                                <?php
                                    // số trang hiển thị ra màn hình tối đa hiện tại là 3
                                    $start = $page> 1? $page -1: $page;
                                    $end = $page < $num_of_page? $page +1: $num_of_page;
                                    for($i=$start;$i<=$end;$i++){
                                        ?>
                                        <a <?php if($i == $page) { echo 'class="active"';} ?> href="category/<?php echo $categoryName?>/page-<?php echo $i ?>"><?php echo $i ?></a>
                                    <?php
                                    }
                                ?>
                                <!-- trang sau -->
                                <a href="category/<?php echo $categoryName?>/page-<?php if($page<$num_of_page) {echo $page+1;}  else {echo $num_of_page;}?>" >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
               <!-- End pagination --> 

<?php
    }  
    else {      // if there is no product match
        echo "This category is temporarily out of stock!";
    }
?>
                
</section>  <!-- Shop Shad Section End -->  

<?php
    include 'inc/footer.php';
?>