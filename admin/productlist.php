<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/product.php'; 
	include_once ($filepath.'/../helper/format.php');
	$fm = new Format();
	$product = new product();
	$result = $product->show_product();

//remove
	if(isset($_GET['deleteid'])  && $_GET['deleteid'] != NULL) {
		// lấy query param , không lấy được body parser 
        $id = $_GET['deleteid'];
        $delproduct = $product->delete_product($id);

    }

?>
<div id="layoutSidenav_content">

	<main>
    	<div class="container-fluid px-4">
        	<h3 class="mt-4">Danh sách sản phẩm</h3>
        	<?php 
        	if(isset($delproduct)){
        	     header("Location:productlist.php");
        		 echo $delproduct;

        		}
        	?>
        	<!-- table -->
        	<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách sản phẩm
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Model</th>
                                            <th>Gender</th>
                                            <th>Season</th>
                                            <th>Product description</th>
                                            <th>Image1</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                        	<?php 
                        		$no = 0;
			                	if($result != false) { // tránh lỗi do ko có record nào
				                	while($row = $result->fetch_assoc())
				                		{
				                			$no++;
				                			
			                 	?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['productName']; ?></td>
                                            <td><?php echo $row['categoryName']; ?></td>
                                            <td><?php echo $row['brandName']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['color']; ?></td>

                                            <td><?php echo $row['size']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['season']; ?></td>
                                            <td><?php echo $fm->textShorten( $row['description'],200); ?></td>
                                            

                                            	<!-- lấy 1 hình đại diện cho sản phẩm thôi -->
                                            	<?php 
                                            		$image_list = $product->getImgByProductId($row['productId']);
	                                            	while($i = $image_list->fetch_assoc())
								                		{
								                ?>
								                 	<td> 
	                                            			<image src="../img/product/<?php echo $i['image']?>"width = 100px>
	                                           		</td>
												<?php		
														break; } 	  
												?>


											<td>
												<a href="productedit.php?productId=<?php echo $row['productId'] ;?>">Edit</a> 
						|| <a onclick="return confirm('Bạn có chắc chắn xóa?')"  href="?deleteid=<?php echo $row['productId'] ?>">Delete</a>
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