<?php  ob_start(); include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>
<?php include '../classes/category.php'; ?>

<?php include '../classes/brand.php'; ?>

<?php include '../classes/product.php'; 

	if(isset($_GET['productId'])  && $_GET['productId'] != NULL) {
        $id = $_GET['productId'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='productlist.php'</script>";
    }   

	$category = new category();
    $brand = new brand();
	$product = new product();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
         $check = $product->update_product($_POST, $_FILES,$id);
        //  echo '<script>alert("'.$check.'")</script>';
    }
?> 


<script type="text/javascript">
	function validate_add()
	{
		
		let productname = document.addForm.productname.value;
        if (productname.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.addForm.productname.focus();
            return false;
        }

        let category = document.addForm.category.value;
        if (category.trim() == '')
        {
            document.getElementById("alert2").style.display = "flex";
            document.addForm.category.focus();
            return false;
        }

        let brand = document.addForm.brand.value;
        if (brand.trim() == '')
        {
            document.getElementById("alert3").style.display = "flex";
            document.addForm.brand.focus();
            return false;
        }

        let price = document.addForm.price.value;
        if (price.trim() == '')
        {
            document.getElementById("alert4").style.display = "flex";
            document.addForm.price.focus();
            return false;
        }

        let color = document.addForm.color.value;
        if (color.trim() == '')
        {
            document.getElementById("alert5").style.display = "flex";
            document.addForm.color.focus();
            return false;
        }

        let size = document.addForm.size.value;
        if (size.trim() == '')
        {
            document.getElementById("alert6").style.display = "flex";
            document.addForm.size.focus();
            return false;
        }

        let model = document.addForm.model.value;
        if (model.trim() == '')
        {
            document.getElementById("alert7").style.display = "flex";
            document.addForm.model.focus();
            return false;
        }

        let gender = document.addForm.gender.value;
        if (gender.trim() == '')
        {
            document.getElementById("alert8").style.display = "flex";
            document.addForm.gender.focus();
            return false;
        }

        let season = document.addForm.season.value;
        if (season.trim() == '')
        {
            document.getElementById("alert9").style.display = "flex";
            document.addForm.season.focus();
            return false;
        }

        // let productdes = document.addForm.productdes.value;
        let productdes = CKEDITOR.instances.productdes.getData();
        if (productdes.trim() == '')
        {
            document.getElementById("alert10").style.display = "flex";
            document.addForm.productdes.focus();
            return false;
        }


        return true;
	}
</script>

<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Sửa sản phẩm</h3>
             <?php 
            if(isset($check)){
                echo $check ;
                // var_dump($check);
                }
             ?>

             <?php 
             $getProduct = $product->getProductById($id);
             if($getProduct){
                    while($productRow = $getProduct->fetch_assoc())
                            {


             ?>

            <form action="" method="post" enctype="multipart/form-data" name="addForm" onsubmit="return validate_add();">
	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Product name</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="productname" placeholder="Product name.." value="<?php echo $productRow['productName']; ?>" onchange="document.getElementById('alert1').style.display = 'none';">
				      <span class="invalid-feedback" id="alert1">Vui lòng nhập tên sản phẩm</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Category</label>
		          	<div class="col-sm-4">
		          		<select id="category" name="category"  class="form-control">
	                            <option value="">Select Category</option>
	                            <?php $catlist = $category->showCategorybyName(); 
                                if($catlist != false) { 
                                    while ($row = $catlist->fetch_assoc()) { ?>
                                                           
                            <option 
                            <?php if($row['categoryId'] == $productRow['categoryId'])  { echo "selected";} ?>
                             value="<?php echo $row['categoryId']; ?>"><?php echo $row['categoryName']; ?></option>

                           <?php    }    
                          			 }   ?>  
	                        </select>
	                        <span class="invalid-feedback" id="alert2">Vui lòng chọn category</span>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Brand</label>
		          	<div class="col-sm-4">
		          		<select id="brand" name="brand"  class="form-control">
	                            <option value="">Select Brand</option>
	                            <?php $brandlist = $brand->showBrandbyName(); 
                                if($catlist != false) { 
                                    while ($row = $brandlist->fetch_assoc()) { ?>
                                                           
                            <option 
                            <?php if($row['brandId'] == $productRow['brandId'])  { echo "selected";} ?>
                            value="<?php echo $row['brandId']; ?>"><?php echo $row['brandName']; ?></option>

                           <?php    }  ?>   
                          <?php }   ?>   

	                        </select>
	                        <span class="invalid-feedback" id="alert3">Vui lòng chọn brand</span>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="price" class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="price" name="price" placeholder="price.." value="<?php echo $productRow['price']; ?>" onchange="document.getElementById('alert4').style.display = 'none';">
				      <span class="invalid-feedback" id="alert4">Vui lòng nhập giá</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Color</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="color" name="color" placeholder="color.." value="<?php echo $productRow['color']; ?>" onchange="document.getElementById('alert5').style.display = 'none';">
				       <span class="invalid-feedback" id="alert5">Vui lòng chọn màu sắc</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Size</label>
				    <div class="col-sm-6">
				      <input type="number" class="form-control" id="size" name="size" placeholder="size.." value="<?php echo $productRow['size']; ?>" onchange="document.getElementById('alert6').style.display = 'none';"> 
				      <span class="invalid-feedback" id="alert6">Vui lòng chọn kích thước</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Model</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="model" name="model" placeholder="model.." value="<?php echo $productRow['model']; ?>" onchange="document.getElementById('alert7').style.display = 'none';">
				      <span class="invalid-feedback" id="alert7">Vui lòng chọn model</span>
				    </div>
	          </div>


	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Gender</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="gender"  class="form-control">
	                            <option value="">Select Gender</option>
	                            <?php 
	                            if ($productRow['gender'] == 'male') 
	                            {
	                            	echo '<option value="male" selected>Male</option>';
	                            }
	                            else {
	                            	echo '<option value="male">Male</option>';
	                            }

	                            if ($productRow['gender'] == 'female') 
	                            {
	                            	echo '<option value="female" selected>Female</option>';
	                            }
	                            else {
	                            	echo '<option value="female">Female</option>';
	                            }

	                            if ($productRow['gender'] == 'unisex') 
	                            {
	                            	echo '<option value="unisex" selected>Unisex</option>';
	                            }
	                            else {
	                            	echo '<option value="unisex">Unisex</option>';
	                            }
	                            ?>
	                            
	                            
	                        </select>
	                        <span class="invalid-feedback" id="alert8">Vui lòng chọn giới tính</span>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="season" class="col-sm-2 col-form-label">Season</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="season" name="season" placeholder="season.." value="<?php echo $productRow['season']; ?>" onchange="document.getElementById('alert9').style.display = 'none';">
				      <span class="invalid-feedback" id="alert9">Vui lòng chọn mùa</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productdes" class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-6">
				      <textarea name="productdes"><?php echo $productRow['description']; ?></textarea>
		                <script>
		                        CKEDITOR.replace( 'productdes' );
		                </script>
		                <span class="invalid-feedback" id="alert10">Vui lòng nhập chi tiết sản phẩm</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Image (4 images)</label>
				    <div class="col-sm-10">

				    	<?php 
				    		$image_list = $product->getImgByProductId($productRow['productId']);
                        	while($i = $image_list->fetch_assoc())
		                		{
		                ?>
                        			<image style="padding: 5px" src="../img/product/<?php echo $i['image']?>"width = 350px>
                        				
						<?php		
								} 	  
						?>

                       <br>     
				      <input type="file" name="image1" />
				      <br>
				      <input type="file" name="image2" />
				      <br>
				      <input type="file" name="image3" />
				      <br>
				      <input type="file" name="image4" />
				    </div>
	          </div>

				<div  style="padding:10px">
		          	<button type="submit" class="btn btn-primary" name="submit">Save product</button>
			    </div>


		    </form>


		    <?php
		    	}
		    }
		    else {
		    	        	     header("Location:../404.php");

		    }
		    ?>

         </div>
	</main>
    
</div>

<?php include 'inc_admin/footer.php' ?>


