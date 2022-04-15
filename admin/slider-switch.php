<?php 
include '../classes/slider.php';

if (isset($_POST['id']) && isset($_POST['status']))
{
    $slider = new Slider();
    $check = $slider->changeStatus($_POST['id'], $_POST['status']);
    echo $check;
}
else echo false;
?>