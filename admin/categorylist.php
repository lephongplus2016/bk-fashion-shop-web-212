<?php include 'inc_admin/header.php' ?>
<?php include 'inc_admin/sidebar.php' ?>
<?php include '../classes/category.php' ;
    
	$cat = new category();
	if(isset($_GET['deleteid'])  && $_GET['deleteid'] != NULL) {
		// lấy query param , không lấy được body parser 
       $id = $_GET['deleteid'];
        $delcat = $cat->del_category($id);
    }
    // dùng else này khi nào đó là 1 site riêng 
   //  else{
         // code mặc định trở về trang web cũ
   //     echo "<script>window.location ='categorylist.php'</script>";
   //  }   
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản Lý Danh mục</h1>
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Name</th>                            
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        	<?php 
                        		$no = 0;
                                $result = $cat->showCategory();
			                	if($result != false) { // tránh lỗi do ko có record nào
				                	while($row = $result->fetch_assoc())
				                		{
				                			$no++;
				                			
			                 	?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['categoryId']; ?></td>
                                            <td><?php echo $row['categoryName']; ?></td>  
											<td>
												<a href="categoryedit.php?categoryId=<?php echo $row['categoryId'] ;?>">Edit</a> 
						|| <a onclick="return confirm('Bạn có chắc chắn xóa?')"  href="?deleteid=<?php echo $row['categoryId'] ?>">Delete</a>
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
