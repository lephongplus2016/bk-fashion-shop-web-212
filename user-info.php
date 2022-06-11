<?php
    include 'inc/include_header.php';
    $title = "Hồ sơ của tôi";
    include 'inc/header.php';
?>
<?php
    
    $login_check = Session::get('user_login'); 
    if($login_check==false){
        header('Location:login.php');
    }
        
?>
<?php
    $userId = Session::get('user_id');
?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Thông tin cá nhân</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Profile Section Begin -->
    <section class="profile spad">
        <div class="container">
            <div class="profile__form">
                <form action="ajax/profile_edit.php" id="edit-form">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 offset-lg-2 offset-sm-3" id="data-render">
                            <h6 class="profile__title">Profile</h6>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group profile__input">
                                        <label for="name">Họ và Tên</label>
                                        <input class="form-control" type="text" id="name">
                                        <span class="invalid-feedback">Vui lòng điền họ và tên của bạn</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group profile__input">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="text" id="email">
                                        <span class="invalid-feedback">Email không hợp lệ hoặc đã có người khác sử dụng</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group profile__input">
                                <label for="address">Địa chỉ</label>
                                <input class="form-control" type="text" id="address">
                                <span class="invalid-feedback">Vui lòng điền địa chỉ</span>
                            </div>
                        
                            <div class="form-group profile__input">
                                <label for="phone">Số điện thoại</label>
                                <input class="form-control" id="phone" type="text" placeholder="Street Address">
                                <span class="invalid-feedback">Số điện thoại không hợp lệ hoặc trống</span>
                            </div>
                            
                            <div class="profile__button" id="edit-start">
                                <button type="button" class="site-btn" onclick="edit_profile();">Chỉnh sửa profile</button>
                            </div>
                            <div class="profile__button" id="edit-end">
                                <button type="submit" class="site-btn">Lưu</button>
                                <button type="button" class="site-outline-btn" onclick="edit_end();">Trở lại</button>
                            </div>
                        </div >
                    </div>
                </form>
            </div>
            <br/>
            <!-- thay doi mat khau -->
            <div class="password-form">
                <form action="ajax/password_edit.php" id="password-form">
                <div class="row">
                        <div class="col-lg-8 col-md-6 offset-lg-2 offset-sm-3" id="data-render">
                            <h6 class="profile__title">Thay đổi mật khẩu</h6>
                            <!-- mật khẩu cũ -->
                            <div class="form-group password__input">
                                <label for="old-password">Nhập mật khẩu cũ</label>
                                <input class="form-control" type="password" id="old_password">
                                <span class="invalid-feedback">Vui lòng nhập mật khẩu cũ</span>
                            </div>
                            <!-- mật khẩu mới -->
                            <div class="form-group password__input">
                                <label for="new-password">Nhập mật khẩu mới</label>
                                <input class="form-control" type="password" id="new_password">
                                <span class="invalid-feedback">Vui lòng nhập mật khẩu mới</span>
                            </div>

                            <div class="form-group password__input">
                                <label for="new-password2">Nhập lại mật khẩu mới</label>
                                <input class="form-control" type="password" id="new_password2">
                                <span class="invalid-feedback">Vui lòng nhập lại mật khẩu mới</span>
                            </div>

                            <!-- button -->
                             <div class="profile__button" id="password-start">
                                <button type="button" class="site-btn" onclick="edit_password();">Đổi mật khẩu</button>
                            </div>
                            <div class="profile__button" id="password-end">
                                <button type="submit" class="site-btn">Lưu</button>
                                <button type="button" class="site-outline-btn" onclick="edit_password_end();">Trở lại</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Profile Section End -->

    <script>
        // Show/hide buttons
        function edit_profile()
        {
            $(".profile__input input:disabled").removeAttr("disabled");
            $("#edit-start").hide();
            $("#edit-end").show();
        }
        function edit_end(){
            $("#edit-end").hide();
            $("#edit-start").show();
            $(".profile__input input").attr("disabled","disabled");
            get_data();
            $(".profile__input input").removeClass("is-invalid");
        }

        function get_data(){
            $.get( "ajax/profile_edit.php", { id: <?php echo $userId?> } )
            .done( function (data){
                //console.log(data);
                try{
                    profile = jQuery.parseJSON(data);
                    $('#name').val(profile.name);
                    $('#email').val(profile.email);
                    $('#address').val(profile.address);
                    $('#phone').val(profile.phone);
                }
                catch(e){
                    alert(e);
                }
            });
        }

        // Attach a submit handler to the form
        $( "#edit-form" ).submit(function( event ) {
            
            // Stop form from submitting normally
            event.preventDefault();
            
            // Get some values from elements on the page:
            var $form   = $( this ),
                name    = $form.find( "input[id='name']" ).val(),
                email   = $form.find( "input[id='email']" ).val(),
                address = $form.find( "input[id='address']" ).val(),
                phone   = $form.find( "input[id='phone']" ).val(),
                url     = $form.attr( "action" );
            
            // Send the data using post
            var posting = $.post( url, { id: <?php echo $userId?>, name: name, email: email, address: address, phone: phone } );
            
            // Execute script
            posting.done(function( data ) {
                //console.log(data);
                eval(data);
            });
        });

        edit_end();
        get_data()
    </script>

          <!-- handle for edit password ================================================================== -->
    <script type="text/javascript">
        // Show/hide buttons
        function edit_password()
        {
            $(".password__input").show();
            $("#password-start").hide();
            $("#password-end").show();
        }
        function edit_password_end(){
            $("#password-end").hide();
            $("#password-start").show();
            $(".password__input").hide();
        }

        edit_password_end();

        $("#password-form").submit(function (event) {
            // Stop form from submitting normally
            event.preventDefault();
            // Get some values from elements on the page:
            var $form = $(this),
                old_password  = $form.find("input[id='old_password']").val(),
                new_password  = $form.find("input[id='new_password']").val(),
                new_password2  = $form.find("input[id='new_password2']").val(),
                url = $form.attr("action");

            
            // Send the data using post
            var posting = $.post( url, { id: <?php echo $userId?>, old_password: old_password, new_password: new_password, new_password2: new_password2 } );

            // // Execute script from password_edit.php
            posting.done(function( data ) {
                //console.log(data);
                eval(data);
            });
        });
    </script>

<?php
    include 'inc/footer.php';
?>