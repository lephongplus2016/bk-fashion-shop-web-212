<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php
include '../classes/brand.php'; 
    $class = new brand();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $check = $class->insertBrand($_POST['name']);
    }   
   

?>

<script type="text/javascript">
    function validate_brand()
    {
        
        let brandname = document.brandForm.brandname.value;
        if (brandname.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.brandForm.brandname.focus();
            return false;
        }

        return true;
    }
</script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h2 class="mt-4">Thêm Thương hiệu</h2>
                <span>
                <?php 
                if(isset($check)){
                    echo $check;
                    }
                 ?>
                
            </span>            
            <form action="brandadd.php" method="post" enctype="multipart/form-data" name="brandForm" onsubmit="return validate_brand();">
                 <div class="form-group row">
		          	<label for="brandnem" class="col-sm-2 col-form-label">Tên Thương hiệu</label>
				    <div class="col-sm-6">
                        <input type="text" id="brandname" placeholder="Enter Brand Name..." class="form-control" name='name' onchange="document.getElementById('alert1').style.display = 'none';"/>
                        <span class="invalid-feedback" id="alert1">Vui lòng nhập thương hiệu</span>
				    </div>
	            </div>
                <div  style="padding:10px">
                    <input type="submit" class="btn btn-primary" name="submit" Value="Lưu Thương hiệu" />
			    </div>
                    
                </form>             

         </div>
	</main>
    
</div>

<?php include 'inc_admin/footer.php' ?>


