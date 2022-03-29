<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/product.php'; 
	$product = new product();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
        $check = $product->inser_product($_POST, $_FILES);
        // láy tất cả trường id của post, files để lấy hình ảnh

    }
?> 

<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Thêm sản phẩm</h3>
             <?php 
            if(isset($check)){
                echo $check ;
                // var_dump($check);
                }
             ?>

            <form action="" method="post" enctype="multipart/form-data">
	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Product name</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="productname" placeholder="Product name..">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Category</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="category"  class="form-control">
	                            <option>Select Category</option>
	                            <option value="1">Áo</option>
	                            <option value="0">Quần</option>
	                        </select>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Brand</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="brand"  class="form-control">
	                            <option>Select Brand</option>
	                            <option value="1">Kappa</option>
	                            <option value="0">Nike</option>
	                        </select>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="price" class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="price" name="price" placeholder="price..">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Color</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="color" placeholder="color..">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Size</label>
				    <div class="col-sm-6">
				      <input type="number" class="form-control" id="productname" name="size" placeholder="size..">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Model</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="model" placeholder="model..">
				    </div>
	          </div>


	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Gender</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="gender"  class="form-control">
	                            <option>Select Gender</option>
	                            <option value="male">Male</option>
	                            <option value="female">Female</option>
	                            <option value="unisex">Unisex</option>
	                        </select>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="season" class="col-sm-2 col-form-label">Season</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="season" name="season" placeholder="season..">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productdes" class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-6">
				      <textarea name="productdes"></textarea>
		                <script>
		                        CKEDITOR.replace( 'productdes' );
		                </script>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Image (4 images)</label>
				    <div class="col-sm-6">
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
		          	<button type="submit" class="btn btn-primary" name="submit">Add product</button>
			    </div>


		    </form>

         </div>
	</main>
    
</div>

<?php include 'inc_admin/footer.php' ?>





<?php include 'inc_admin/footer.php' ?>