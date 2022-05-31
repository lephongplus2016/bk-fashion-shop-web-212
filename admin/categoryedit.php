<?php
include '../classes/category.php';
// lấy request param cat_id của get method 
    if(isset($_GET['categoryId'])  && $_GET['categoryId'] != NULL) {
        $id = $_GET['categoryId'];
    }
    else{
        // code mặc định trở về trang web cũ
        echo "<script>window.location ='categorylist.php'</script>";
    }   
    $cat = new category();
   

   //post edit
    // form post và get này cứ xài đi xài lại
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['categoryName'];
        $updateCat = $cat->updateCategory($id,$name);

    }
    

?>

<?php include 'inc_admin/header.php';?>
<?php include 'inc_admin/sidebar.php';?>


<div id="layoutSidenav_content">

    <main>
    <div class="container-fluid px-4">
                <h1>Edit Category</h1>
                <span>
                <?php 

                $categoryName = $cat->getCatById($id);
                if($categoryName){
                    while($row = $categoryName->fetch_assoc())
                            {
                                //echo $row['categoryName'];
                                echo "<script> console.log('ok'); </script>";                
                ?> 
            </span>
               
                 <form action="categoryedit.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $row['categoryName']; ?>" name="categoryName">
                            </td>
                        </tr> <br>
						<tr> 
                            <td>
                                <br><input type="submit" class="btn btn-primary" name="submit" Value="Edit" onclick="window.location ='categorylist.php'"/>
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