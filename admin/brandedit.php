<?php
include '../classes/brand.php';
// lấy request param cat_id của get method 
    if(isset($_GET['brandId'])  && $_GET['brandId'] != NULL) {
        $id = $_GET['brandId'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='brandlist.php'</script>";
    }   
    $brand = new brand();
   

   //post edit
    // form post và get này cứ xài đi xài lại
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['brandName'];
        $updateCat = $brand->updateBrand($id,$name);

    }
    

?>

<?php include 'inc_admin/header.php';?>
<?php include 'inc_admin/sidebar.php';?>


<div id="layoutSidenav_content">

    <main>
    <div class="container-fluid px-4">
                <h1>Edit brand</h1>
                <span>
                <?php 

                $brandName = $brand->getBrandById($id);     
                if($brandName){
                    while($row = $brandName->fetch_assoc())
                            {
                                //echo $row['brandName'];
                                echo "<script> console.log('ok'); </script>";                
                ?> 
            </span>
               
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $row['brandName']; ?>" name="brandName">
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Edit"/>
                            </td>
                        </tr>
                        <?php 
                         }
                }
                ?>
                    </table>
                    </form>
                
            </div>
	</main>
    
</div>


        
<?php include 'inc_admin/footer.php';?>