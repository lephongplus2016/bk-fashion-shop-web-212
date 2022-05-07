<?php
include '../classes/cart.php'; 
$cart = new cart();

    if(isset($_GET['orderId'])  && $_GET['orderId'] != NULL) {
        $id = $_GET['orderId'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='orderlist.php'</script>";
    }   
   
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
         // $check = $product->update_product($_POST, $_FILES,$id);
        $status = $_POST['status'];
        $update = $cart->set_status_order($id,$status);
    }

?>

<?php include 'inc_admin/header.php';?>
<?php include 'inc_admin/sidebar.php';?>


<div id="layoutSidenav_content">

    <main>
    <div class="container-fluid px-4">
                <h1>Sửa trạng thái đơn hàng</h1>
                <span>
               
            </span>
               
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <?php
                                    $this_order = $cart->get_order_by_id($id);
                                    if($this_order != false) { // tránh lỗi do ko có record nào
                                    while($row = $this_order->fetch_assoc())
                                        {
                                ?>
                                <select id="select" name="status"  class="form-control">

                                <option <?php 
                                    if($row['status'] == 0){
                                        echo 'selected';
                                    }
                                 ?> value=0>Chờ xử lý</option>
                                <option <?php 
                                    if($row['status'] == 1){
                                        echo 'selected';
                                    }
                                 ?> value=1>Đang giao hàng</option>
                                <option <?php 
                                    if($row['status'] == 2){
                                        echo 'selected';
                                    }
                                 ?> value=2>Đã giao hàng</option>
                               
                            </select>

                                        <?php } ?>
                                    <?php } ?>  
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Edit"/>
                            </td>
                        </tr>
                       
                    </table>
                    </form>
                    <a type="button" class="btn btn-primary" href="orderlist.php">Thoát</a>
                
            </div>
	</main>
    
</div>


        
<?php include 'inc_admin/footer.php';?>