<?php
ob_start();
session_start();
include '../lib/session.php';
Session::init();

if(isset($_GET['user_id'])){
    Session::destroy();
    echo "location.reload()";
}
?>