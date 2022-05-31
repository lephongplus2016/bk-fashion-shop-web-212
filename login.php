<?php
    include 'inc/include_header.php';
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
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginForm'])) {
        
        $login_user = $user->login_user($_POST, $id,$index);        
    }
?>

<script type="text/javascript">
function validate_login() {
    let email = document.loginForm.inputEmail.value;
    if (email.trim() == ''){
        document.getElementById('alert1').style.display = 'flex';
        document.loginForm.inputEmail.focus();
        return false;
    }

    let password = document.loginForm.inputPassword.value;
    if (password.trim() == ''){
        document.getElementById('alert2').style.display = 'flex';
        document.loginForm.inputPassword.focus();
        return false;
    }
    return true;
            
}
</script>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3>
                                         <?php 
                                        if(isset($login_user)){
                                            echo $login_user; ?>
                                           <?php } ?>
                                    </div>
                                    <div class="card-body">
                                        <form name="loginForm" onsubmit="return validate_login();" action="" method="post">
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Địa chỉ Email</label>
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" onchange="document.getElementById('alert1').style.display = 'none';"/>   
                                                <span class="invalid-feedback" id="alert1">Vui lòng nhập email</span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputPassword">Mật khẩu</label>
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" onchange="document.getElementById('alert2').style.display = 'none';"/>
                                                <span class="invalid-feedback" id="alert2">Vui lòng nhập mật khẩu</span>
                                                <br>
                                                <input type="checkbox" onclick="hideShowPassword()">Hiện mật khẩu
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Quên mật khẩu?</a>
                                                <input type="submit" name="loginForm" class="btn btn-primary" value="Đăng nhập">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Chưa có tài khoản? Đăng kí ngay!</a></div>
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