<?php
    include 'inc/header.php';
?>
<?php
$id = "";
$index = 0;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $index = 1;
    }
    if(isset($_GET['productId'])){
        $id = $_GET['productId'];
        $index = 2;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_user = $user->login_user($_POST, $id,$index);        
    }
?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3>
                                         <?php 
                                        if(isset($login_user)){
                                            echo $login_user; ?>
                                           <?php } ?>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Email address</label>
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />   
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                <br>
                                                <input type="checkbox" onclick="hideShowPassword()">Show Password
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <input type="submit" name="login" class="btn btn-primary" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>



 <script>
    function hideShowPassword() {
      var x = document.getElementById("inputPassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>           

 <?php
    include 'inc/footer.php';
?>