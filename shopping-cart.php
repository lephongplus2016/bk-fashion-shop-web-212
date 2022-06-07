<?php
    include 'inc/include_header.php';
    include 'inc/header.php';
?>

<?php
if(isset($_GET['cartId'])  && $_GET['cartId'] != NULL) {
        // lấy query param , không lấy được body parser 
        $cartId = $_GET['cartId'];
        $deleteProductCart = $cart->delete_product_cart($cartId);
    }

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])){ 
            // $cardId = $_POST['cartId'];
            // $quantity = $_POST['quantity'];
            $updateQuantityCart = $cart->update_quantity_cart_all($_POST);
    // var_dump($_POST);

        }
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <?php 
                            if(isset($updateQuantityCart)){
                            echo $updateQuantityCart;
                            }
                             ?>
                             <?php 
                            if(isset($deleteProductCart)){
                            echo $deleteProductCart;
                            }
                             ?>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Shopping Cart</span>
                            <?php
                            $user_id = Session::get('user_id');
                            if (empty($user_id)){
                                echo "<br>Quý khách vui lòng đăng nhập để mua hàng!";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- begin form update quantity of product cart -->
                    <form action="" method="post">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Size</th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     $get_product_cart = $cart->getProductCart();
                                     $subTotal =0;
                                     $qty = 0;
                                     $count = -1;
                                     if($get_product_cart){
                                        while($row = $get_product_cart->fetch_assoc())
                                        {
                                            $count++;
                                     ?>       
                                    
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img width="100px" src="img/product/<?php echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['productName']; ?></h6>
                                            <h5><?php echo $row['price']; ?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <!-- <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" name="quantity_<?php echo $count; ?>" value="<?php echo $row['quantity']; ?>" >
                                                      
                                            </div>
                                        </div> -->
                                        <div >
                                            <!-- set min = 1 -->
                                            <input style="width: 80px" type="number" min=1 name="quantity_<?php echo $count; ?>" value="<?php echo $row['quantity']; ?>" >
                                        </div>

                                    </td>
                                    <!-- thẻ này chỉ nhằm lấy cardId - tách riêng với quantity tag-->
                                                <input type="hidden" name="cartId_<?php echo $count;; ?>" value="<?php echo $row['cartId']; ?>">   
                                    <td class="cart__price"><?php echo $row['size']; ?></td>
                                    <td class="cart__price">
                                        <?php
                                        $total = $row['price'] * $row['quantity'];
                                        $subTotal += $total;
                                        $qty += $row['quantity'];
                                        echo  $fm->format_currency($total)." VND";
                                        ?>
                                    </td>
                                    <td class="cart__close"> <a onclick="return confirm('Bạn có muốn xóa không?');" href="shopping-cart.php?cartId=<?php echo $row['cartId']; ?>"><i class="fa fa-close"></i></a></td>
                                </tr>
                                
                                <?php
                                        }
                                    }
                                    
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="shop.php">Quay lại shop</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">  
                                <button type="submit" name="update_cart"/>Cập nhật giỏ hàng <i class="fa fa-spinner"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                        <!-- end form update quantity of product cart -->

                </div>
                <div class="col-lg-4">
                    <!-- <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div> -->
                    <div class="cart__total">
                        <h6>Thanh toán</h6>
                        <ul>
                            <li>Tổng cộng <br> (chưa có VAT) <span><?php echo $fm->format_currency($subTotal)." VND"; ?></span></li>
                            <li>Có VAT <span><?php echo $fm->format_currency($subTotal*1.1)." VND"; ?></span></li>
                            <?php
                            // co cart thi moi dat session
                            $check_cart = $cart->check_cart();
                            if($check_cart){
                                Session::set('sum',$subTotal);
                                Session::set('qty', $qty);
                            }
                            ?>
                        </ul>
                        <a href="checkout.php" class="primary-btn">Đặt đơn</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

<?php
    include 'inc/footer.php';
?>