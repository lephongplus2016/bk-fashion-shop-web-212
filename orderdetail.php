<?php
    include 'inc/include_header.php';
    include 'inc/header.php';
?>
 <?php
    $login_check = Session::get('user_login'); 
    if($login_check==false){
        header('Location:login.php');
    }

    // update -> đã nhận hàng
    if(isset($_GET['confirmid'])  && $_GET['confirmid'] != NULL) {
        $id = $_GET['confirmid'];
        $status = 2;
        $update = $cart->set_status_order($id,$status);
        echo "<script>window.location ='orderdetail.php'</script>";
    }
    
    
?> 


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Chi tiết đơn hàng</h4>
                        
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Đơn hàng</span>
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
                <div class="col-lg-12">
                    <!-- begin form update quantity of product cart -->
                    <form action="" method="post">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>note</th>
                                    <th>Kiểu thanh toán</th>
                                    <th>Tổng cộng</th>
                                    <th>Thời gian</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     $user_id = Session::get('user_id');
                                    $get_cart_ordered = $cart->get_cart_ordered($user_id);
                                     if($get_cart_ordered){
                                    $i = 0;
                                    $qty = 0;
                                    $total = 0;
                                    while($row = $get_cart_ordered->fetch_assoc()){
                                        $i++;
                                        $total = $row['price']*$row['quantity'];
                                ?>   
                                    
                                <tr>
                                    <td class="cart__price"><?php echo $row['orderId']; ?></td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img width="100px" src="img/product/<?php echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['productName']; ?></h6>
                                            <h5>Đơn giá: <?php echo $fm->format_currency($row['price'])." VND"; ?></h5>
                                            <h5>Số lượng: <?php echo $row['quantity']; ?></h5>
                                            <h5>Size: <?php echo $row['size']; ?></h5>

                                        </div>
                                    </td>
                                    <td class="cart__price"><?php echo $row['note']; ?></td>
                                     
                                    <td class="cart__price">Thanh toán <?php echo $row['paymentType']; ?></td>
                                    <td class="cart__price">
                                        <?php
                                        echo  $fm->format_currency($total)." VND";
                                        ?>
                                    </td>
                                    <td class="cart__price">
                                        <?php
                                        echo  $fm->formatDate($row['datetime']);
                                        ?>
                                    </td>
                                    <!-- begin status order -->
                                    <td class="cart__close"> 
                                        <?php
                                            if($row['status']=='0'){
                                        ?>
                                                <?php echo 'Chờ xử lý';?>
                                        <?php
                                            // khi admin xử lý
                                            }elseif($row['status']=='1'){
                                            
                                        ?>
                                                <a href="orderdetail.php?confirmid=<?php echo $row['orderId']?>">Đang vận chuyển</a>
                                        <?php
                                            }else{
                                        ?>
                                           <?php echo 'Đã giao hàng'; ?>
                                        <?php
                                            }   
                                        ?>
                                    </td>
                               <!-- end status order -->

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
                       
                    </div>
                    </form>
                        <!-- end form update quantity of product cart -->

                </div>
                
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

<?php
    include 'inc/footer.php';
?>