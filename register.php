<?php
    include 'inc/include_header.php';
    $title = "Đăng kí";
    include 'inc/header.php';
?>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitCreateAccount'])){ 
        $insert_user = $user->insert_user($_POST);
        // echo "co post method";
        // var_dump($insert_user);
        // echo $insert_user;
    }

?>
<script type="text/javascript">
    
    function validate_register()
    {
        // tim theo id
        var name = document.registerForm.name.value;
        if (name.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.registerForm.name.focus();
            return false;
        }

        var email = document.registerForm.email.value;
        if (email.trim() == '')
        {
            document.getElementById("alert2").style.display = "flex";
            document.registerForm.email.focus();
            return false;
        }

        var address = document.registerForm.address.value;
        if (address.trim() == '')
        {
            document.getElementById("alert3").style.display = "flex";
            document.registerForm.address.focus();
            return false;
        }

        var phone = document.registerForm.phone.value;
        if (phone.trim() == '')
        {
            document.getElementById("alert4").style.display = "flex";
            document.registerForm.phone.focus();
            return false;
        }

            //if phone  is not number
        if (isNaN(phone)) {
            document.getElementById("alert4-1").style.display = "flex";
            document.registerForm.phone.focus();
            return false;
        }

        var password = document.registerForm.password.value;
        if (password.trim() == '')
        {
            document.getElementById("alert5").style.display = "flex";
            document.registerForm.password.focus();
            return false;
        }

        var password2 = document.registerForm.password2.value;
        if (password2.trim() == '')
        {
            document.getElementById("alert6").style.display = "flex";
            document.registerForm.password2.focus();
            return false;
        }

        if (password != password2){
            document.getElementById("alert7").style.display = "flex";
            document.registerForm.password2.focus();
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
                            <div class="col-lg-7">
                                <div class="card border-2 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tạo tài khoản</h3>
                                        <?php 
                                        if(isset($insert_user)){
                                            echo $insert_user; ?>
                                            <a href="login.php"> Đi tới đăng nhập</a>
                                           <?php } ?>
                                         
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST" name="registerForm" onsubmit="return validate_register();">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label for="inputFirstName" >Họ và tên</label>
                                                        <input class="form-control" id="name" type="text" placeholder ="Nhập học và tên" name='name' onchange="document.getElementById('alert1').style.display = 'none';"/>
                                                        
                                                        <span class="invalid-feedback" id="alert1">Vui lòng nhập họ và tên</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <label for="inputLastName" >Email</label>
                                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" name='email' onchange="document.getElementById('alert2').style.display = 'none';"/>
                                                        
                                                        <span class="invalid-feedback" id="alert2">Vui lòng nhập email</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Địa chỉ</label>
                                                <input class="form-control" id="address" type="text" placeholder="Nhập địa chỉ"  name="address" onchange="document.getElementById('alert3').style.display = 'none';"/>
                                                
                                                <span class="invalid-feedback" id="alert3">Vui lòng nhập địa chỉ</span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Số điện thoại</label>
                                                <input class="form-control" id='phone'  type="text" placeholder="Nhập sđt"  name="phone" onchange="document.getElementById('alert4').style.display = 'none'; document.getElementById('alert4-1').style.display = 'none'"/>
                                                <span class="invalid-feedback" id="alert4">Vui lòng nhập số điện thoại</span>
                                                <span class="invalid-feedback" id="alert4-1">Vui lòng chỉ nhập số</span>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label for="inputPassword">Password</label>
                                                        <input class="form-control" id="password" type="password" placeholder="Nhập password"  name="password" onchange="document.getElementById('alert5').style.display = 'none';"/>
                                                        <span class="invalid-feedback" id="alert5">Vui lòng nhập password</span>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label for="inputPasswordConfirm">Nhập lại Password</label>
                                                        <input class="form-control" id="password2" type="password" placeholder="Nhập lại password" name="password2" onchange="document.getElementById('alert6').style.display = 'none'; 
                                                            document.getElementById('alert7').style.display = 'none';
                                                        "/>
                                                        <span class="invalid-feedback" id="alert6">Vui lòng nhập lại password</span>
                                                        <span class="invalid-feedback" id="alert7">Mật khẩu nhập lại không đúng</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name='submitCreateAccount' class="btn btn-primary btn-block" value='Tạo tài khoản'></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php" class="btn-link">Đã có tài khoản? Đi tới đăng nhập</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>


<?php
    include 'inc/footer.php';
?>