<?php
include_once ("../classes/user.php");
$user = new user();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['old_password']) 
        && isset($_POST['new_password']) && isset($_POST['new_password2']) )
{

	$id = $_POST['id'];
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$new_password2 = $_POST['new_password2'];
	$error = false;

	if (strlen($old_password) < 1) {
        $error = true;
        ?>
        $form.find( "input[id='old_password']" ).addClass("is-invalid");
        $form.find( "input[id='old_password']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='old_password']" ).removeClass("is-invalid");
        <?php
    }


    if (strlen($new_password) < 1) {
        $error = true;
        ?>
        $form.find( "input[id='new_password']" ).addClass("is-invalid");
        $form.find( "input[id='new_password']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='new_password']" ).removeClass("is-invalid");
        <?php
    }

    if (strlen($new_password2) < 1 or $new_password != $new_password2) {
        $error = true;
        ?>
        $form.find( "input[id='new_password2']" ).addClass("is-invalid");
        $form.find( "input[id='new_password2']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='new_password2']" ).removeClass("is-invalid");
        <?php
    }

    // xác thực mật khẩu cũ
	if(!$user->check_only_password($id,$old_password)){
	   $error = true;
	    	 ?>
	    	alert('Bạn nhập sai password cũ! vui lòng nhập lại hoặc chọn quên mật khẩu');
	    	
	    	<?php	
	}

	// nhập mật khẩu mới
    if (!$error)
    {

    	if($user->password_edit($id, $new_password)){
    		?>
	    	alert('Đã cập nhật password');
	    	edit_password_end()
	    	<?php
    	}
    	else {
            echo "Error: Lỗi cơ sở dữ liệu";
        }
    	
    }
}
?>