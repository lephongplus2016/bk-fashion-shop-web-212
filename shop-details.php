<?php
    include 'inc/include_header.php';
    include 'inc/header.php';
?>
<?php include 'classes/comment.php';
$comment = new comment();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
    // echo '<pre>'; print_r($_FILES); echo '</pre>';

    $check = $comment->insert_comment($_POST, $_FILES, $_GET["productId"]);
}
else if(isset($_GET['deleteCommentId'])){
    $CommentId = $_GET['deleteCommentId'];
    $delUser = $comment->delete_comment($CommentId);
    $id = $_GET['productId'];
    echo "<script>window.location ='shop-details.php?productId=$id'</script>";
}

?>


<?php 
    if(isset($_GET['productId'])  && $_GET['productId'] != NULL) {
        $id = $_GET['productId'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='shop.php'</script>";
    }
    

?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart'])){
    $userId = Session::get('user_id');
    $login_check = Session::get('user_login'); 
    
    // cho user
    if($login_check==true){
        $addCart = $cart->insert_cart($id,$userId,$_POST);
    }
    // cho khách
    else{
        $addCart = $cart->insert_cart_guest($id,$_POST);
    }
    header("Refresh:0");
}

?>
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
                <div class="row">
<!-- begin image product -->
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
<?php 
    $image_list = $product->getImgByProductId($id);
    $count =0;
    while($i = $image_list->fetch_assoc())
        {
            $count++;
?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $count == 1  ?  'active' : ''; ?>" data-toggle="tab" href="#tabs-<?php echo $count; ?>" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/product/<?php echo $i['image']; ?>">
                                    </div>
                                </a>
                            </li>
<?php       
        }     
?>

                           
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
<?php 
    $image_list = $product->getImgByProductId($id);
    $count =0;
    while($i = $image_list->fetch_assoc())
        {
            $count++;
?>

                            <div class="tab-pane <?php echo $count == 1  ?  'active' : ''; ?>" id="tabs-<?php echo $count; ?>" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/product/<?php echo $i['image']; ?>" alt="" style='width: 600px;'>
                                </div>
                            </div>
<?php       
            }     
    ?>

                         
                        </div>
                    </div>


                </div>
            </div>
        </div>
<!-- end image product -->
<!-- begin product detail -->
<?php 
 $getProduct = $product->getProductDetailShopPage($id);
 if($getProduct){
        while($productRow = $getProduct->fetch_assoc())
                {


 ?>
        <style>
            .container-commented-contented {
                margin-top: 50px;
            }
            .in4-comment-user {
                display: flex;
                height: 180px;
                margin-bottom: 20px;
                /* border-bottom: 1px solid rgba(0,0,0,.09); */
            }
            .img-user-comment {
                height: 40px;
                flex-basis: 5%;
                margin-right: 10px;
            }
            .img-user-comment img {
                border-radius: 50%;
                width: 40px;
                height: 100%;
                object-fit: cover;
            }
            .content-main {
                flex-basis: 75%;
                position: relative;
                border-bottom: 1px solid rgba(0,0,0,.09);
            }
            .content-main:hover .container-btn-ellip {
                color: #000;
            }
            .img-commented img{
                width: 100%;
                height: 90%;
                object-fit: cover;
            }
            .date-commented {
                font-size: 12px;
            }
            .comments-from-users {
                font-size: 18px;
                background: rgba(0,0,0,.02);
                color: rgba(0,0,0,.87);
                padding: 0.875rem;
                text-transform: capitalize;
                margin-bottom: 20px;
                width: 100%;
            }
            .container-btn-ellip {
                background: transparent;
                border: transparent;
                position: absolute;
                top: 0;
                right: 0;
                padding: 8px 16px;
                z-index: 999;
                color: #fff;
                transition: all 0.3s ease;
            }
            .att-comment {
                position: absolute;
                top: 30px;
                right: 0;
                box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);
                visibility: hidden;
                z-index: -999;
            }
            .att-comment a:hover {
                background: #ccc;
            }
            .att-comment a {
                padding: 5px 30px;
                color: black;
                display: block;
            }
            .show-att-coment {
                visibility: visible;
                z-index: 999;
            }
            .text-black {
                color: black !important;
            }
        </style>
        <div class="product__details__content">
            <div class="container">
                
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h1><?php echo $productRow['productName']; ?></h1>
                            
                            <h3><?php echo $fm->format_currency($productRow['price'])." VNĐ"; ?> 
                            <span><?php $oldprice = (int)$productRow['price']; echo $fm->format_currency($oldprice*1.5)." VNĐ"; ?></span>
                            </h3>
                           
                        <!-- begin add to cart -->
                           <form action="" method="post">
                           
                                    <div class="product__details__option">
                                        <div class="product__details__option__size">
                                            <span>Size:</span>
                                             <label class="active" for="xl" > <?php echo $productRow["size"]; ?>
                                                <input type="radio" id="x1" name="size" value="<?php echo $productRow["size"] ?>" checked
                                                />
                                            </label>

                                            <?php
                                                for ($x = 1; $x <= 6; $x++) {
                                                    $sizeLoop = (int)$productRow["size"] + $x;
                                                    
                                                  echo 
                                                  '<label for="x'.$sizeLoop.'">'.$sizeLoop.'
                                                        <input type="radio" id="x'.$sizeLoop.'" name="size" value="'.$sizeLoop.'">
                                                    </label>';
                                                }
                                            ?> 


                                        </div>
                                        <div class="product__details__option__color">
                                            <b><span >Màu sắc: <?php echo $productRow['color']; ?></span></b>
                                            
                                        </div>


                                    </div>
                                    <div class="product__details__cart__option">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="quantity" value="1">
                                            </div>
                                        </div>

                                        <!-- dành cho price dùng cho post-->
                                        <input type="hidden" name="price" value="<?php echo $productRow["price"] ?>"  />
                                        <input name="cart" type="submit" class="primary-btn" value="Thêm vào giỏ hàng"/>
                                        <?php
                                            if(isset($addCart)){
                                                echo "<br>";
                                                 echo $addCart ;
                                                
                                                }
                                            ?>  
                                    </div>
                             </form> 
                            <!-- end add to cart -->

                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>Model:</span> <?php echo $productRow['model']; ?></li>
                                    <li><span>Danh mục:</span> <?php echo $productRow['categoryName']; ?></li>
                                    <li><span>Thương hiệu</span> <?php echo $productRow['brandName']; ?></li>
                                    <li><span>Giới tính</span> <?php echo $productRow['gender']; ?></li>
                                    <li><span>Season</span> <?php echo $productRow['season']; ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
<!-- end product detail -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Chi tiết</a>
                                </li>
                                <li class="nav-item">
                                                <?php 
                                                $n = 0;
                                                    $comments = $comment->getImgByCommentProductId($_GET["productId"]);
                                                    if($comments != false) {
                                                        $n = mysqli_num_rows($comments);
                                                    } 	  
												
                                    echo '<a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Đánh giá của khách hàng('.$n.')</a>';
                                    ?>
                                </li>
                               
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <!-- mô tả sản phẩm -->
                                        <div class="product__details__tab__content__item">
                                            <h5>Mô tả sản phẩm</h5>
                                            <?php echo $productRow['description']; ?>
                                        </div>
                                        
                                    </div>
                                </div>


<script type="text/javascript">
    
    function validate_cmt()
    {
        var content = document.cmtForm.content.value;
        if (content.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.cmtForm.content.focus();
            return false;
        }

        var image = document.cmtForm.image1.value;
        if(image != '')
        {
           if (image.indexOf('.jpeg') == -1 && image.indexOf('.jpg') == -1 && image.indexOf('.png') == -1 && image.indexOf('.gif') == -1)
            {
                document.getElementById("alert2").style.display = "flex";
                document.cmtForm.image1.focus();
                return false;
            }
        }
        
        return true;
    }
    
</script>

                                <!-- begin comment -->
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    
                                    <?php
                                    $login_check = Session::get('user_login');
                                    if($login_check == true){
                                    echo '<form action="" method = "POST" style = "margin-top: 40px;" enctype="multipart/form-data" name="cmtForm" onsubmit="return validate_cmt();">
                                    <div class="form-floating">
                                        <label for="content">Bình Luận sản phẩm</label>
                                        <div class="form-floating">
                                        <textarea class="form-control" placeholder="Bình luận..." id="content" name = "content" style="height: 100px"></textarea>
                                            <span class="invalid-feedback" id="alert1">Vui lòng nhập nội dung</span>
                                        </div>
                                    </div>
                                    <div class="form-floating" style = "margin-top: 10px;">
                                        <label for="productname">Ảnh sản phẩm</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="image1" id="image1" accept=".jpeg, .jpg, .png, .gif"/>
                                            <br>
                                            <div style="padding-top: 5px;">
                                            <img id="upload-img1" style="max-width: 50%">
                                            </div>
                                            <span class="invalid-feedback" id="alert2">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
                                        </div>
                                    </div>
                                        <button style = "margin-top: 10px;" type="submit" name = "submit" class="btn btn-primary">Gửi Bình Luận</button>
                                    </form>';
                                    }
                                    else {
                                        echo '<p class="fw-normal" style="margin-top: 20px">Đăng nhập để bình luận <a href = "login.php?productId='.$_GET["productId"].'">Đến đăng nhập</a></p>';
                                    }
                                    ?>
                                    <div class="container-commented-contented">
                                    <h2 class="comments-from-users">Bình luận sản phẩm</h2>
                                        <?php 
                                                    $comments = $comment->getImgByCommentProductId($_GET["productId"]);
                                                    if($comments != false) {
                                                    while($i = $comments->fetch_assoc())
								                	{
                                                    $nameUser = $comment->getNameUserComment($i['userId']);
                                                    if($nameUser!=false){
                                                            ?>
                                                            <div class = "in4-comment-user">
                                                                <div class = "img-user-comment">
                                                                <img src="img/avatar.jpg" alt="">
                                                                </div>
                                                                <div class = "content-main">
                                                                <?php
                                                                while($m = $nameUser->fetch_assoc()){
                                                                    echo $m['name'];
                                                                }
                                                                ?>
                                                                <p class="date-commented">Vào lúc: <?=$i['dateComment']?></p>
                                                                <p class="content-commented"><?=$i['content']?></p>
                                                                <button class = "container-btn-ellip"><i class="fa fa-ellipsis-v"></i></button>
                                                                <div class="att-comment">
                                                                <?php
                                                                    $isAdmin = Session::get('user_role');
                                                                    $userId = Session::get('user_id');
                                                                    if ($isAdmin == 'admin' || $userId == $i['userId']) {
                                                                        echo '<a href="?deleteCommentId='.$i['commentId'].'&productId='.$id.'">Xóa</a>';
                                                                    }
                                                                    else {
                                                                        echo '<a href="">Báo cáo</a>';
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <?php if($i['image']!=""){ 
                                                                echo '<div class="img-commented">
                                                                    <img src="img/comment/'.$i['image'].'" alt="">
                                                                    </div>';
                                                                    }?>
                                                            </div>
                                                            <?php
														}
                                                    }
                                                } 	  
												?>
                                        </div>
                                </div>
                                                                <!-- end comment -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
        }
    }
?>    

    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Section End -->
    <script>

	const fileUploader = document.getElementById(`image1`);
    const reader = new FileReader();
    fileUploader.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader.readAsDataURL(file);
        
        reader.addEventListener('load', (event) => {
            img = document.getElementById(`upload-img1`);
            img.src = event.target.result;
            img.alt = file.name;
        });
    });   
    const btnEllips = document.querySelectorAll('.container-btn-ellip');
    btnEllips.forEach((btnEllip)=>{
        const attComment = btnEllip.parentNode.querySelector('.att-comment');
        btnEllip.addEventListener('click', () => {
            btnEllip.classList.toggle('text-black');
            attComment.classList.toggle('show-att-coment');
        });
    });
    

   
</script>
<?php
    include 'inc/footer.php';
?>