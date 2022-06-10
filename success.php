<?php
    include 'inc/include_header.php';
    $title = "Đặt hàng thành công";
    include 'inc/header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ hàng</h4>
                       
                        <div class="breadcrumb__links">
                            <a href="./index.php">Trang chủ</a>
                            <a href="./shop.php">Sản phẩm</a>
                            <span>Giỏ hàng</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container text-center">
            <h2 style="color: green">Bạn đã đặt hàng thành công</h2>
            Chúng tôi sẽ sớm liên hệ lại. Xem chi tiết đơn hàng tại  <a href="orderdetail.php" class="btn-link">đây</a></p>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

<?php
    include 'inc/footer.php';
?>