<?php  ob_start(); include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/product.php'; 

	if(isset($_GET['productId'])  && $_GET['productId'] != NULL) {
        $id = $_GET['productId'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='productlist.php'</script>";
    }   


	$product = new product();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
         $check = $product->update_product($_POST, $_FILES,$id);
        //  echo '<script>alert("'.$check.'")</script>';
    }
?> 

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

            <form action="" method="post" enctype="multipart/form-data">
	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Product name</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="productname" placeholder="Product name.." value="<?php echo $productRow['productName']; ?>">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Category</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="category"  class="form-control">
	                            <option>Select Category</option>
	                            <option value="1" selected>Áo</option>
	                            <option value="0">Quần</option>
	                        </select>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Brand</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="brand"  class="form-control">
	                            <option>Select Brand</option>
	                            <option value="1" selected>Kappa</option>
	                            <option value="0">Nike</option>
	                        </select>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="price" class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="price" name="price" placeholder="price.." value="<?php echo $productRow['price']; ?>">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Color</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="color" placeholder="color.." value="<?php echo $productRow['color']; ?>">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Size</label>
				    <div class="col-sm-6">
				      <input type="number" class="form-control" id="productname" name="size" placeholder="size.." value="<?php echo $productRow['size']; ?>">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Model</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="model" placeholder="model.." value="<?php echo $productRow['model']; ?>">
				    </div>
	          </div>


	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Gender</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="gender"  class="form-control">
	                            <option>Select Gender</option>
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
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="season" class="col-sm-2 col-form-label">Season</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="season" name="season" placeholder="season.." value="<?php echo $productRow['season']; ?>">
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productdes" class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-6">
				      <textarea name="productdes"><?php echo $productRow['description']; ?></textarea>
		                <script>
		                        CKEDITOR.replace( 'productdes' );
		                </script>
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


