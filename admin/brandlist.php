<?php include 'inc_admin/header.php' ?>
<?php include 'inc_admin/sidebar.php' ?>
<?php include '../classes/brand.php' ;
	$brand = new brand();
	if(isset($_GET['delid'])  && $_GET['delid'] != NULL) {
		// lấy query param , không lấy được body parser 
        $id = $_GET['delid'];
        $check = $brand->deleteBrand($id);
    }      
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản Lý Thương Hiệu</h1>
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Tên Thương Hiệu</th>                            
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        	<?php 
                        		$no = 0;
                                $result = $brand->showBrand();
			                	if($result != false) { // tránh lỗi do ko có record nào
				                	while($row = $result->fetch_assoc())
				                		{
				                			$no++;
				                			
			                 	?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['brandId']; ?></td>
                                            <td><?php echo $row['brandName']; ?></td>  
											<td>
												<a href="brandedit.php?brandId=<?php echo $row['brandId'] ;?>">Edit</a> 
						|| <a onclick="return confirm('Bạn có chắc chắn xóa?')"  href="?deleteid=<?php echo $row['brandId'] ?>">Delete</a>
											</td>


							<?php } ?>
						<?php } ?>	
										</tr>

                                    </tbody>
                            </table>
                    </div>
                </main>
                
            </div>        
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
        
<?php include 'inc_admin/footer.php' ?>
