<?php  ob_start(); include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/user.php'; 

	if(isset($_GET['userId'])  && $_GET['userId'] != NULL) {
        $userId = $_GET['userId'];
    }
    else{
        echo "<script>window.location ='client.php'</script>";
    }   


	$user = new user();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
         $check = $user->update_user($_POST, $_FILES,$userId);

    }
    
?> 

<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Sửa Thông Tin Khách Hàng</h3>
             <?php 
            if(isset($check)){
                echo $check ;
                }
             ?>

             <?php 
             $getUser= $user->getUserById($userId);
             if($getUser){
                    while($userRow = $getUser->fetch_assoc())
                            {


             ?>

            <form action="" method="post" enctype="multipart/form-data">
	          <div class="form-group row">
		          	<label for="userName" class="col-sm-2 col-form-label">Customer name</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="userName" name="userName" value="<?php echo $userRow['name']; ?>">
				    </div>
	          </div>
              <div class="form-group row">
		          	<label for="userMail" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-6">
				      <input type="email" class="form-control" id="userMail" name="userMail" value="<?php echo $userRow['email']; ?>">
				    </div>
	          </div>
              <div class="form-group row">
		          	<label for="userAdress" class="col-sm-2 col-form-label">Address</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="userAdress" name="userAdress" value="<?php echo $userRow['address']; ?>">
				    </div>
	          </div>
              <div class="form-group row">
		          	<label for="userPhone" class="col-sm-2 col-form-label">Phone</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="userPhone" name="userPhone" value="<?php echo $userRow['phone']; ?>">
				    </div>
	          </div>
	          <div class="form-group row">
		          	<label for="select" class="col-sm-2 col-form-label">Role</label>
		          	<div class="col-sm-4">
		          		<select id="select" name="role"  class="form-control" >
                                <?php 
                                if($userRow['role'] == 'customer'){
                                    echo '<option value="customer" selected>customer</option>
                                    <option value="admin">admin</option>';
                                } 
                                else
                                {
                                    echo '<option value="admin" selected>admin</option>
                                    <option value="customer">customer</option>';
                                }
                                ?>
	                        </select>
		          	</div>
	           </div>
				<div  style="padding:10px">
		          	<button type="submit" class="btn btn-primary" name="submit">Save user information</button>
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


