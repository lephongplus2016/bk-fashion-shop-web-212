<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO section -->
    <title><?php
        if(isset($title)) echo $title ,' - BK Fashion Shop';
        else echo 'BK Fashion Shop';
    ?></title>
    <meta name="description" content="<?php
        if (isset($description)) echo $description;
        else echo 'BK Fashion Shop - Quần áo thời trang phong cách';
    ?>">
    <meta name="keywords" content="<?php
        if(isset($keywords)) echo $keywords; 
        else echo 'Fashion, thời trang, quần áo, giá rẻ, 2022';
    ?>"> 

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <base href="http://localhost/bk-fashion-shop-web-212/">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>-->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style type="text/css">
        span.error
        {
            margin: 8px 0 0 0;
            padding: 0;
            height: 1%;
            
            color: #FF0000;
        }

        span.success
        {
            margin: 8px 0 0 0;
            padding: 0;
            height: 1%;
            
            color: #7b912b;
        }
    </style>
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3"> <!-- 25%-->
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logobk.jpg" height="70px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6"> <!-- 50%-->
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <!--<li class="active"><a href="./index.php">Home</a></li>-->
                            <li><a href="./index.php">Trang chủ</a></li>
                            <li><a href="./shop.php">Sản Phẩm</a></li>
                            <li><a>Phân loại</a>
                                <ul class="dropdown">
                                    <?php 
                                        $catlist = $category->showCategorybyName(); 
                                        if($catlist != false) { 
                                            while ($row = $catlist->fetch_assoc()) { 
                                                $product_by_category = $product->search_product_by_category($row['categoryId']);
                                                if($product_by_category != false){
                                                    $num = mysqli_num_rows($product_by_category);
                                                }
                                                else{
                                                    $num = 0;
                                                } 
                                                $cate_link_name = vn_to_str($row["categoryName"]);                                                               
                                    ?>                                                                                   
                                                <li><a href="category/<?php echo $cate_link_name; ?>"><?php echo $row['categoryName'];   echo " ($num)";?> </a></li>
                                    <?php    }  ?>   
                                    <?php }   ?>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3"> <!-- 25%-->
                    <div class="header__nav__option">
<!--                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>-->                        
                        <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">
                            <?php
                                        $check_cart = $cart->check_cart();
                                        // check nếu có cart
                                        // if($check_cart->num_rows>0){
                                        if($check_cart){
                                            $sum = Session::get("sum");
                                            $qty = Session::get("qty");
                                            echo $fm->format_currency($sum).' VNĐ - '.$qty.' sản phẩm';
                                        }
                                        else{
                                            echo '0 VNĐ';
                                        }

                                    ?>
                        </div>
                        
                        <?php
                            // dùng biến login_check ở session để lưu có đăng nhập chưa
                            $login_check = Session::get('user_login'); 
                            if($login_check==false){
                                echo '<a href="login.php" class="btn btn-info">Đăng nhập</a>';
                            }else{
                                ?>
                                <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="user-info.php">Hồ sơ của tôi</a>
                                    <a class="dropdown-item" href="orderdetail.php">Đơn hàng</a>
                                    <?php
                                        // quyền admin
                                        $isAdmin = Session::get('user_role');
                                        if ($isAdmin == 'admin') {
                                            echo '<a class="dropdown-item" href="admin/index.php">Trang admin</a> ';
                                        } 
                                    ?>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" onclick="$.getScript('ajax/logout.php?user_id=<?php echo Session::get('user_id')?>');">Đăng xuất</a>
                                </div>
                                </div>
                        <?php 
                            } 
                        ?>

                    </div>
                </div>
            </div>
            <div class="canvas__open">            
                    <div class="btn-group">
                        <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="./index.php">Trang Chủ</a>
                        <a class="dropdown-item" href="./shop.php">Sản Phẩm</a>
                        <a class="dropdown-item" href="./shop.php">Phân Loại</a>
                        <a class="dropdown-item" href="./blog.php">Blog</a>
                        <a class="dropdown-item" href="./contact.php">Liên Hệ</a>
                        <a class="dropdown-item" href="./orderdetail.php">Đơn Hàng</a>
                        </div>             
        
        
            </div>
        </div>
    </header>
    <!-- Header Section End -->