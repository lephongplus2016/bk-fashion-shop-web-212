<?php
include_once ("../classes/user.php");
$user = new user();

if(isset($_GET['id'])  && $_GET['id'] != NULL) 
{
    $id = $_GET['id'];
    $get_customers = $user->getUserById($id);

    if($get_customers !== false) {
        $row = $get_customers->fetch_assoc();
        $json = array (
            'name' => $row['name'],
            'email' => $row['email'],
            'address' => $row['address'],
            'phone' => $row['phone']
        );
        echo json_encode($json);
    }
}
else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['name']) 
        && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $error = false;

    if (strlen($name) < 1) {
        $error = true;
        ?>
        $form.find( "input[id='name']" ).addClass("is-invalid");
        $form.find( "input[id='name']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='cname']" ).removeClass("is-invalid");
        <?php
    }
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) 
        || ($user->profile_check_unique_email($id, $email) == false)) {
        $error = true;
        ?>
        $form.find( "input[id='email']" ).addClass("is-invalid");
        $form.find( "input[id='email']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='email']" ).removeClass("is-invalid");
        <?php
    }
    if (strlen($address) < 1) {
        $error = true;
        ?>
        $form.find( "input[id='address']" ).addClass("is-invalid");
        $form.find( "input[id='address']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='address']" ).removeClass("is-invalid");
        <?php
    }
    if (!preg_match("/^([0-9]){10}$/x", $phone)) {
        $error = true;
        ?>
        $form.find( "input[id='phone']" ).addClass("is-invalid");
        $form.find( "input[id='phone']" ).focus();
        <?php
    }
    else{
        ?>
        $form.find( "input[id='phone']" ).removeClass("is-invalid");
        <?php
    }

    if (!$error)
    {
        if ($user->profile_edit($id, $name, $email, $address, $phone)) {
            ?>
            $form.find( "input[id='name']" ).val("<?php echo $name;?>");
            $form.find( "input[id='email']" ).val("<?php echo $email;?>");
            $form.find( "input[id='address']" ).val("<?php echo $address;?>");
            $form.find( "input[id='phone']" ).val("<?php echo $phone;?>");
            alert("Lưu thông tin thành công!")
            edit_end();
            <?php
        } else {
            echo "Error: Lỗi cơ sở dữ liệu";
        }
    }
    else{
        ?> 
        $form.find( "input[id='name']" ).val("<?php echo $name;?>");
        $form.find( "input[id='email']" ).val("<?php echo $email;?>");
        $form.find( "input[id='address']" ).val("<?php echo $address;?>");
        $form.find( "input[id='phone']" ).val("<?php echo $phone;?>");
        <?php
    }
}

?>