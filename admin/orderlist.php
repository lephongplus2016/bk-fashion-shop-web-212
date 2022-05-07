<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/cart.php'; 
	include_once ($filepath.'/../helper/format.php');
	$fm = new Format();
	$cart = new cart();
    $result = $cart->get_all_order();

	//remove
    if(isset($_GET['orderId'])  && $_GET['orderId'] != NULL) {
        // lấy query param , không lấy được body parser 
        $id = $_GET['orderId'];
        $datetime = $_GET['datetime'];
        $productId = $_GET['productId'];

        $delOrder = $cart->delete_order($id,$datetime, $productId );
    }

?>
<div id="layoutSidenav_content">

	<main>
    	<div class="container-fluid px-4">
        	<h3 class="mt-4">Danh sách sản phẩm</h3>
        	<?php 
            if(isset($delOrder)){
                 echo "<script>window.location ='orderlist.php'</script>";

                 echo $delOrder;

                }
            ?>
        	<!-- table -->
        	<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách Order
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Size</th>
                                            <th>Hình ảnh</th>
                                            <th>Mã khách hàng</th>
                                            <th>Ghi chú</th>
                                            <th>Kiểu thanh toán</th>
                                            <th>Thời gian</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                        	<?php 
                        		$no = 0;
			                	if($result != false) { // tránh lỗi do ko có record nào
				                	while($row = $result->fetch_assoc())
				                		{
				                			$no++;
				                			
			                 	?>
                                        <tr>
                                           <td><?php echo $row["orderId"] ?></td>
                                            <td><?php echo $row['productName']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['size']; ?></td>
                                                
                                            <td> 
                                                    <image src="../img/product/<?php echo $row['image']?>"width = 100px> 
                                            </td>
                                                
                                            <td><?php echo $row['userId']; ?> - <a href="clientEdit.php?userId=<?php echo $row['userId']; ?>">Xem địa chỉ</a></td>
                                            <td><?php echo $row['note']; ?></td>
                                            <td><?php echo $row['paymentType']; ?></td>
                                            <td><?php echo $row['datetime']; ?></td>
                                            <td><?php $status = $row['status']; 
                                                if($status == 0) {
                                                    echo "Chờ xử lý";
                                                }
                                                else if ($status == 1){
                                                    echo "Đang vận chuyển";
                                                }
                                                else{
                                                    echo "Đã giao hàng";
                                                }
                                            ?>
                                                

                                            </td>
                                            

                                            	


											<td>
												<a href="orderedit.php?orderId=<?php echo $row['orderId'] ;?>">Edit</a> 
						|| <a onclick="return confirm('Bạn có chắc chắn xóa?')"  href="orderlist.php?orderId=<?php echo $row['orderId'] ;?>&datetime=<?php echo $row['datetime'] ;?>&productId=<?php echo $row['productId'] ;?>">Delete</a>
											</td>


							<?php } ?>
						<?php } ?>	
										</tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

		</div>
	</main>
    
</div>

<?php include 'inc_admin/footer.php' ?>