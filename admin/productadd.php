<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/category.php'; ?>

<?php include '../classes/brand.php'; ?>

<?php include '../classes/product.php' ; 
	$product = new product();
	$category = new category();
    $brand = new brand();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
		// echo '<pre>'; print_r($_FILES); echo '</pre>';

        $check = $product->insert_product($_POST, $_FILES);
        // láy tất cả trường id của post, files để lấy hình ảnh

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

        // image
        var image1 = document.addForm.image1.value;
        if(image1 == '')
        {
            document.getElementById("alert-i1a").style.display = "flex";
            document.addForm.image1.focus();
            return false;
        }
        if (image1.indexOf('.jpeg') == -1 && image1.indexOf('.jpg') == -1 && image1.indexOf('.png') == -1 && image1.indexOf('.gif') == -1)
        {
            document.getElementById("alert-i1b").style.display = "flex";
            document.addForm.image1.focus();
            return false;
        }


        var image2 = document.addForm.image2.value;
        if(image2 == '')
        {
            document.getElementById("alert-i1a").style.display = "flex";
            document.addForm.image2.focus();
            return false;
        }
        if (image2.indexOf('.jpeg') == -1 && image2.indexOf('.jpg') == -1 && image2.indexOf('.png') == -1 && image2.indexOf('.gif') == -1)
        {
            document.getElementById("alert-i1b").style.display = "flex";
            document.addForm.image2.focus();
            return false;
        }


        var image3 = document.addForm.image3.value;
        if(image3 == '')
        {
            document.getElementById("alert-i1a").style.display = "flex";
            document.addForm.image3.focus();
            return false;
        }
        if (image3.indexOf('.jpeg') == -1 && image3.indexOf('.jpg') == -1 && image3.indexOf('.png') == -1 && image3.indexOf('.gif') == -1)
        {
            document.getElementById("alert-i1b").style.display = "flex";
            document.addForm.image3.focus();
            return false;
        }

        var image4 = document.addForm.image4.value;
        if(image4 == '')
        {
            document.getElementById("alert-i1a").style.display = "flex";
            document.addForm.image4.focus();
            return false;
        }
        if (image4.indexOf('.jpeg') == -1 && image4.indexOf('.jpg') == -1 && image4.indexOf('.png') == -1 && image4.indexOf('.gif') == -1)
        {
            document.getElementById("alert-i1b").style.display = "flex";
            document.addForm.image4.focus();
            return false;
        }

        return true;
	}
</script>


<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Thêm sản phẩm</h3>
             <?php 
            if(isset($check)){
                echo $check ;
                }
             ?>

            <form action="" method="post" enctype="multipart/form-data" name="addForm" onsubmit="return validate_add();">
	          <div class="form-group row">
		          	<label for="productname" class="col-sm-2 col-form-label">Product name</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="productname" name="productname" placeholder="Product name.." onchange="document.getElementById('alert1').style.display = 'none';">
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
                                                           
                            <option value="<?php echo $row['categoryId']; ?>"><?php echo $row['categoryName']; ?></option>

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
                                                           
                            <option value="<?php echo $row['brandId']; ?>"><?php echo $row['brandName']; ?></option>

                           <?php    }  ?>   
                          <?php }   ?>   

	                        </select>
	                        <span class="invalid-feedback" id="alert3">Vui lòng chọn brand</span>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="price" class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="price" name="price" placeholder="price.." onchange="document.getElementById('alert4').style.display = 'none';">
				      <span class="invalid-feedback" id="alert4">Vui lòng nhập giá</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="color" class="col-sm-2 col-form-label">Color</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="color" name="color" placeholder="color.." onchange="document.getElementById('alert5').style.display = 'none';">
				      <span class="invalid-feedback" id="alert5">Vui lòng chọn màu sắc</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="size" class="col-sm-2 col-form-label">Size</label>
				    <div class="col-sm-6">
				      <input type="number" class="form-control" id="size" name="size" placeholder="size.." onchange="document.getElementById('alert6').style.display = 'none';">
				      <span class="invalid-feedback" id="alert6">Vui lòng chọn kích thước</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="model" class="col-sm-2 col-form-label">Model</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="model" name="model" placeholder="model.." onchange="document.getElementById('alert7').style.display = 'none';">
				      <span class="invalid-feedback" id="alert7">Vui lòng chọn model</span>
				    </div>
	          </div>


	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Gender</label>
		          	<div class="col-sm-4">
		          		<select id="gender" name="gender"  class="form-control">
	                            <option value="">Select Gender</option>
	                            <option value="male" >Male</option>
	                            <option value="female">Female</option>
	                            <option value="unisex">Unisex</option>
	                        </select>
	                        <span class="invalid-feedback" id="alert8">Vui lòng chọn giới tính</span>
		          	</div>
	           </div>

	          <div class="form-group row">
		          	<label for="season" class="col-sm-2 col-form-label">Season</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="season" name="season" placeholder="season.." onchange="document.getElementById('alert9').style.display = 'none';">
				      <span class="invalid-feedback" id="alert9">Vui lòng chọn mùa</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="productdes" class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-6">
				      <textarea name="productdes" id="productdes"></textarea>
		                <script>
		                        CKEDITOR.replace( 'productdes' );
		                </script>
		                <span class="invalid-feedback" id="alert10">Vui lòng nhập chi tiết sản phẩm</span>
				    </div>
	          </div>

	          <div class="form-group row">
		          	<label for="image" class="col-sm-2 col-form-label">Image (4 images)</label>
				    <div class="col-sm-6">
				    	<span class="invalid-feedback" id="alert-i1a">Vui lòng chọn đủ 4 ảnh đại diện</span>
                      <span class="invalid-feedback" id="alert-i1b">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
				      <input type="file" name="image1" id="image1" accept=".jpeg, .jpg, .png, .gif" onchange="document.getElementById('alert-i1a').style.display = 'none'"/>
				      
				      <br>
				      <div style="padding-top: 5px;">
                                    <img id="upload-img1" style="max-width: 50%">
                                </div>
				      <input type="file" name="image2" id="image2"/>
				      <br>
				      <div style="padding-top: 5px;">
                                    <img id="upload-img2" style="max-width: 50%">
                                </div>
				      <input type="file" name="image3" id="image3"/>
				      <br>
				      <div style="padding-top: 5px;">
                                    <img id="upload-img3" style="max-width: 50%">
                                </div>
				      <input type="file" name="image4" id="image4"/>
				      <br>
				      <div style="padding-top: 5px;">
                                    <img id="upload-img4" style="max-width: 50%">
                                </div>
				    </div>
	          </div>

				<div  style="padding:10px">
		          	<button type="submit" class="btn btn-primary" name="submit">Add product</button>
			    </div>


		    </form>

         </div>
	</main>
    
</div>

<script>

for(let i=1;i<5;i++){
	const fileUploader = document.getElementById(`image${i}`);
    const reader = new FileReader();
    fileUploader.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader.readAsDataURL(file);
        
        reader.addEventListener('load', (event) => {
            img = document.getElementById(`upload-img${i}`);
            img.src = event.target.result;
            img.alt = file.name;
        });
    });
}    

    

   
</script>


<?php include 'inc_admin/footer.php' ?>


