<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php
include '../classes/category.php'; 
    $class = new category();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $check = $class->insertCategory($_POST['name']);
    }   
   

?>

<script type="text/javascript">
    function validate_category()
    {
        
        let catname = document.categoryForm.catname.value;
        if (catname.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.categoryForm.catname.focus();
            return false;
        }

        return true;
    }
</script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h3 class="mt-4">Thêm Danh mục</h3>
                <span>
                <?php 
                if(isset($check)){
                    echo $check;
                    }
                 ?>
                
            </span>            
                 <form action="categoryadd.php" method="post" enctype="multipart/form-data" name="categoryForm" onsubmit="return validate_category();">
                 <div class="form-group row">
		          	<label for="catnem" class="col-sm-2 col-form-label">Tên Danh mục</label>
				    <div class="col-sm-6">
                        <input type="text" id="catname" placeholder="Enter Category Name..." class="form-control" name='name' onchange="document.getElementById('alert1').style.display = 'none';"/>
                        <span class="invalid-feedback" id="alert1">Vui lòng nhập danh mục</span>
				    </div>
	            </div>
                <div  style="padding:10px">
                    <input type="submit" class="btn btn-primary" name="submit" Value="Lưu Danh mục" />
			    </div>
                    
                </form>             

         </div>
	</main>
    
</div>

<?php include 'inc_admin/footer.php' ?>


