<?php
    include 'inc/include_header.php';
    $title ="Thanh toán";
    include 'inc/header.php';
?>
<?php
    
    $login_check = Session::get('user_login'); 
    if($login_check==false){
        header('Location:login.php');
    }
        
?>
<?php
    $userId = Session::get('user_id');
    $get_customers = $user->getUserById($userId);
    ?>

<!-- order -->
<?php

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])){
    $cart->insertOrder($_POST);
    // xóa cart sau khi insert
    $delCart = $cart->del_all_data_cart();
    // xóa hiển thị cart ở header
    Session::set('sum',0);
    Session::set('qty', 0);
    header('Location:success.php');
}
    

 
?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Thanh toán</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="" method="post" enctype="multipart/form-data" >
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <?php
                                if($get_customers){
                                    while($result = $get_customers->fetch_assoc()){
                            ?>
                                <h6 class="checkout__title">Chi tiết hóa đơn</h6>

                                <div class="row">
                            
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Họ và Tên<span></span></p>
                                            <input type="text" value="<?php echo $result['name'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span></span></p>
                                            <input type="text" value="<?php echo $result['email'] ?>" readonly>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="checkout__input">
                                    <p>Địa chỉ<span></span></p>
                                    <input type="text" value="<?php echo $result['address'] ?>" readonly>
                                </div>
                                <div class="checkout__input">
                                    <p>Số điện thoại<span></span></p>
                                    <input value="<?php echo $result['phone'] ?>" type="text" placeholder="Street Address" class="checkout__input__add" readonly>
                                </div>
                                <div class="checkout__input">
                                    <a href="user-info.php" type="button" class="site-btn">Sửa thông tin profile</a>
                                </div>
                                
                                <div class="checkout__input">
                                    <p>Ghi chú với shop<span></span></p>
                                    <input type="text" name="note" placeholder="...">
                                </div>
                                <?php
                                    }
                                }
                                ?>
                        </div >
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <?php
                                        $get_product_cart = $cart->getProductCart();
                                        if($get_product_cart){
                                            $subtotal = 0;
                                            $qty = 0;
                                            $i = 0;
                                            while($result = $get_product_cart->fetch_assoc()){
                                                $i++;
                                                $total = $result['price'] * $result['quantity'];
                                        ?>
                                            <li><?php echo $i.'. '.$result['productName']; ?> 
                                                <span><?php
                                                    echo $fm->format_currency($total).' '.'VNĐ' ;
                                                ?></span>
                                            </li>
                                    
                                    <?php
                                                $subtotal += $total;
                                                $qty = $qty + $result['quantity'];
                                                }
                                            }
                                    ?>
                                    
                                </ul>
                                <ul class="checkout__total__all">
                                <?php
                                    // $check_cart = $cart->check_cart();

                                    if($get_product_cart){
                                ?>
                                        <li>Tổng cộng (chưa có VAT) <span>
                                            <?php 
                                                echo $fm->format_currency($subtotal).' '.'VNĐ' ;
                                                Session::set('sum',$subtotal);
                                                Session::set('qty',$qty);
                                            ?>
                                        </span></li>
                                        <li>
                                        Tổng cộng <span>
                                            
                                            <?php 

                                                $vat = $subtotal * 0.1;
                                                $gtotal = $subtotal + $vat;
                                                echo $fm->format_currency($gtotal).' '.'VNĐ' ;
                                            ?>
                                        </span></li>
                                    <?php
                                        }else{
                                            echo 'Giỏ hàng bạn đang trống! :(';
                                        }
                                          ?>
                                </ul>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="payment1" value="COD" checked>
                                    <label class="form-check-label" for="payment1">
                                    Thanh toán COD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="payment2"  value="Online">
                                    <label class="form-check-label" for="payment2">
                                    Thanh toán online
                                    </label>
                                </div>

                                <button type="submit" name="checkout" class="site-btn"
                                <?php
                                    if(!$get_product_cart){
                                        echo "disabled";
                                    }
                                ?>
                                >Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

<?php
    include 'inc/footer.php';
?>