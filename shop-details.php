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
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitEdit'])){
    $alert = $comment->edit_comment($_POST['content'],$_POST['submitEdit'],1);
    echo $alert;
}
else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deletedImg'])){
    $alert = $comment->edit_comment($_POST['content'],$_POST['deletedImg'],0);
    echo $alert;
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
 // dành cho sản phẩm liên quan category này
 $categoryRelative = '';
 if($getProduct){
        while($productRow = $getProduct->fetch_assoc())
                {

$categoryRelative = $productRow['categoryId'];
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
            .img-commented{
                position: relative;
            }
            .btn-del-img {
                position: absolute;
                border-color: transparent;
                top: 0;
                right: 0;
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
                right: 16px;
                box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);
                visibility: hidden;
                z-index: -999;
                
            }
            .att-comment button:hover {
                background-color: #ccc;
            }
            .att-comment button{
                height: 34px;
                border-color: transparent; 
                background-color: transparent;
                transition: all 0.3s linear;

            }
            .att-comment a:hover {
                background: #ccc;
            }
            .att-comment a {
                padding: 5px 30px;
                color: black;
                display: block;
                transition: all 0.3s linear;
            }
            .show-att-coment {
                visibility: visible;
                z-index: 999;
            }
            .text-black {
                color: black !important;
            }
            .form-control-edit {
                width: 100%;
                border: none;
                border-bottom: 1px solid #ccc;
            }
            .form-control-edit:focus {
                border-bottom: 2px solid #000;

            }
            .btn-edit {
                border-color: transparent;
                padding: 3px 12px;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 13px;
            }
            .btn-save {
                background: #0069D9;
                color: #fff;
            }
            .btn-exit {
                background: transparent;
            }
            .container-btn-edit {
                float: right;
                margin-top: 12px;
            }
            .alert-commented-edit {
                display: none;
                color: red;
                margin-top: 8px;
            }
            .show-alert {
                display: inline-block;
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

                            <!-- <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div> -->
                            <div class="product__details__last__option">
                                <h5><span>Mô tả sản phẩm</span></h5>
                                <!-- <img src="img/shop-details/details-payment.png" alt=""> -->
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
                                        ?>
                                    <form action="" method = "POST" style = "margin-top: 40px;" enctype="multipart/form-data" name="cmtForm" onsubmit="return validate_cmt();">
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
                                    </form>;
                                    <?php
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
                                                            <div id="container-form-edit<?=$i['commentId']?>"></div>
                                                            <div class = "in4-comment-user" id="in4-comment-user<?=$i['commentId']?>">
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
                                                                <?php
                                                                if($login_check) echo '<button class = "container-btn-ellip"><i class="fa fa-ellipsis-v"></i></button>'
                                                                ?>
                                                                <div class="att-comment" id="att-comment<?=$i['commentId']?>">
                                                                <?php
                                                                    $isAdmin = Session::get('user_role');
                                                                    $userId = Session::get('user_id');
                                                                    if ($isAdmin == 'admin' || $userId == $i['userId']) {
                                                                    $img = $i['image'];
                                                                        echo '<button  onClick="handleEditcomment('.$i['commentId'].',\''.$img.'\',\''.$i['content'].'\')">Chỉnh sửa</button>';
                                                                        echo '<a href="shop-details.php?deleteCommentId='.$i['commentId'].'&productId='.$id.'">Xóa</a>';
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

    <!-- Related Section Begin======================================================== -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản phẩm liên quan</h3>
                </div>
            </div>
            <div class="row">
                <?php 
    //get product that match category ID and show pagination
    $getcat = $product->search_product_by_category($categoryRelative);
    $count = 0;
    if($getcat){
        while($row = $getcat->fetch_assoc()){
       $count++;
       // chỉ hiện tối đa 6 sản phẩm liên quan
       if ($count>6){
        break;
       }
    ?>
               
                <?php
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
<!--                                         <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
 -->                                        <li><a href="shop-details.php?productId=<?php echo $row["productId"] ?>"><img src="img/icon/search.png" alt=""></a></li>
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
    }
?>


               
            </div>
        </div>
    </section>
    <!-- Related Section End ======================================================================= -->
    <script>
	const fileUploader = document.getElementById("image1");
if(fileUploader){
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
}
    const btnEllips = document.querySelectorAll('.container-btn-ellip');

    btnEllips.forEach((btnEllip)=>{
        const attComment = btnEllip.parentNode.querySelector('.att-comment');

        btnEllip.addEventListener('click', () => {
            btnEllip.classList.toggle('text-black');
            attComment.classList.toggle('show-att-coment');
        });
    });
    function handleEditcomment(id,img,content) {
        const contentComment = document.getElementById(`in4-comment-user${id}`)
        const formEdit = document.getElementById(`container-form-edit${id}`)
        const attComment = document.getElementById(`att-comment${id}`)
        attComment.classList.toggle('show-att-coment');
        contentComment.style = "display: none";
        formEdit.style = "display: block";
        let output = `<div class = "in4-comment-user">
                    <div class = "img-user-comment">
                    <img src="img/avatar.jpg" alt="">
                    </div>
                    <div class = "content-main">
                    <form method="post" style="margin-right: 20px">
                    <lable for="content" style="margin-bottom: 7px;opacity: 0.7; display: block;
                    ">Chỉnh sửa Bình luận</lable>
                    <input type="text" autoFocus name="content" value="${content}" class="form-control-edit" id="form-control-edit${id}" onchange="handleChangeText('${id}','${content}')"/>
                    <span class="alert-commented-edit" id="alert-commented-edit${id}"></span>
                    <div class="container-btn-edit">
                    <button type="button" class="btn-edit btn-exit" onClick="handleOutEdit(${id})">Hủy</button>
                    <button type="button" name="submitEdit" class="btn-edit btn-save" id="btn-save${id}" value="${id}" onClick="handleChangeText('${id}','${content}')">Lưu</button>
                    </div>
                    </form>
                    </div>`;
                    if(img){
                    output+=`<div class="img-commented" id="img-commented${id}">
                    <img src="img/comment/${img}" alt="">
                    <button class="btn-del-img" onclick="handleDelimg(${id})"><i class="fa fa-close"></i></button>
                    </div>
                    </div>`;
                }
                    
        formEdit.innerHTML= output;
    }
    function handleOutEdit(id) {
        const contentComment = document.getElementById(`in4-comment-user${id}`);
        const formEdit = document.getElementById(`container-form-edit${id}`);
        contentComment.style = "display: flex";
        formEdit.style = "display: none";

    }
    function handleDelimg(id){
        const isConfirm = confirm("Xác Nhận xóa");
        const imgCommented = document.getElementById(`img-commented${id}`);
         const buttonSave = document.getElementById(`btn-save${id}`);

        if(isConfirm){
            imgCommented.style = "display: none";
            buttonSave.name="deletedImg";
            // console.log(imgCommented)
        }
    }
function handleChangeText(id,content){
    const valueInput = document.getElementById(`form-control-edit${id}`).value;
    const alertInput = document.getElementById(`alert-commented-edit${id}`);
    const buttonSave = document.getElementById(`btn-save${id}`);
    if(valueInput=="") {
        alertInput.innerHTML = "Trương này không được trống";
        alertInput.classList.add("show-alert")
        buttonSave.type="button";

    }
    else if(valueInput==content){
        alertInput.innerHTML = "Nội dung không đổi";
        alertInput.classList.add("show-alert")
        buttonSave.type="button";
    }
    else {
        buttonSave.type="submit";
        alertInput.classList.remove("show-alert");
    }

}
   
</script>
<?php
    include 'inc/footer.php';
?>