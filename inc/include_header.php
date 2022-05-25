<?php
ob_start();
session_start();
include 'lib/session.php';
Session::init();

include 'lib/database.php';
include 'helper/format.php';

spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
});
    $db = new Database();
	$fm = new Format();
    $user = new user();
    $product = new product();
    $cart = new cart();
    $brand = new brand();
    $category = new category();


  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");?>

<?php 
    if(isset($_GET['user_id'])){
        Session::destroy();
    }
?>