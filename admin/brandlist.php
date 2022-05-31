<?php include 'inc_admin/header.php' ?>
<?php include 'inc_admin/sidebar.php' ?>
<?php include '../classes/brand.php' ;
	$brand = new brand();
	if(isset($_GET['deleteid'])  && $_GET['deleteid'] != NULL) {
		// lấy query param , không lấy được body parser 
        $id = $_GET['deleteid'];
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
                                        echo '
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$row["brandId"].'</td>
                                            <td>'.$row["brandName"].'</td>
                                            <td class="text-center"><button class="btn btn-outline-primary my-1" onclick="location.assign(\'brandedit.php?brandId='.$row["brandId"].'\');">Edit</Button>
                                                <button class="btn btn-outline-danger my-1" onclick="openDeleteConfirm(()=>{location.assign(\'?deleteid='.$row["brandId"].'\')});">Delete</button></td>
                                        </tr>';	
                                    }
                                }
                                 ?>
				                		

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
<script>
    title = "Delete";
    message = "Bạn có chắc chắn muốn xóa dòng này?"
    setConfirmDialog(title, message);
</script>
        
<?php include 'inc_admin/footer.php' ?>
