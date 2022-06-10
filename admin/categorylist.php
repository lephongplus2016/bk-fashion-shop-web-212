<?php include 'inc_admin/header.php' ?>
<?php include 'inc_admin/sidebar.php' ?>
<?php include '../classes/category.php' ;
    
	$cat = new category();
	if(isset($_GET['deleteid'])  && $_GET['deleteid'] != NULL) {
		// lấy query param , không lấy được body parser 
       $id = $_GET['deleteid'];
        $check = $cat->del_category($id);
        echo "<script>window.location ='categorylist.php'</script>";
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
                                <th>ID</th>
                                <th>Name</th>                            
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        	<?php 
                                $result = $cat->showCategory();
			                	if($result != false) { // tránh lỗi do ko có record nào
				                	while($row = $result->fetch_assoc())
				                		{
                                            echo '
                                            <tr>
                                                <td>'.$row["categoryId"].'</td>
                                                <td>'.$row["categoryName"].'</td>
                                                <td class="text-center"><button class="btn btn-outline-primary my-1" onclick="location.assign(\'categoryedit.php?categoryId='.$row["categoryId"].'\');">Edit</Button>
                                                    <button class="btn btn-outline-danger my-1" onclick="openDeleteConfirm(()=>{location.assign(\'?deleteid='.$row["categoryId"].'\')});">Delete</button></td>
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
