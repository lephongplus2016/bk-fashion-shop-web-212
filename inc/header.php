<?php
ob_start();
session_start();
include 'lib/session.php';
Session::init();

include 'lib/database.php';
include 'helper/format.php';

spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
});
    $db = new Database();
	$fm = new Format();
    $user = new user();
    $product = new product();
    $cart = new cart();
    $brand = new brand();
    $category = new category();


  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");?>

<?php 
    if(isset($_GET['user_id'])){
        Session::destroy();
    }
            ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BK Fashion Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
        <!-- <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logobk.jpg" height="70px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
<!--                         <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
 -->                        <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">
                            <?php
                                        $check_cart = $cart->check_cart();
                                        // check nếu có cart
                                        if($check_cart->num_rows>0){
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
                                echo '<a href="login.php" class="btn btn-info">Login</a>';
                            }else{
                                echo '<br/>Xin chào '.Session::get("user_name").'- <a href="?user_id='.Session::get('user_id').'">Đăng xuất</';
                            }

                            // quyền admin
                            $isAdmin = Session::get('user_role');
                            if ($isAdmin == 'admin') {
                                echo '<br/><a href="admin/index.php" class="btn btn-info">Admin page</a>';
                            } 
                        ?>

                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->