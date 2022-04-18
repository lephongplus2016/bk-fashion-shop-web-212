<?php 
include '../classes/banner.php';

if (isset($_POST['id']) && isset($_POST['status']))
{
    $banner = new Banner();
    $check = $banner->changeStatus($_POST['id'], $_POST['status']);
    echo $check;
}
else echo false;
?>