<?php
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
                                        <form action="" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder ="Nhập học và tên" name='name'/>
                                                        <label for="inputFirstName" >Họ và tên</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="email" placeholder="name@example.com" name='email'/>
                                                        <label for="inputLastName" >Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Nhập địa chỉ"  name="address" />
                                                <label for="inputEmail">Địa chỉ</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" placeholder="Nhập sđt"  name="phone" />
                                                <label for="inputEmail">Số điện thoại</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Nhập password"  name="password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Nhập lại password" name="password2" />
                                                        <label for="inputPasswordConfirm">Nhập lại Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name='submitCreateAccount' class="btn btn-primary btn-block" value='Tạo tài khoản'></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Đã có tài khoản? Đi tới đăng nhập</a></div>
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