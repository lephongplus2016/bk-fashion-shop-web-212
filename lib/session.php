<?php
/**
*Session Class
**/
class Session{
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }

 public static function set($key, $val){
    $_SESSION[$key] = $val;
 }

 public static function get($key){
    if (isset($_SESSION[$key])) {
     return $_SESSION[$key];
    } else {
     return false;
    }
 }

 public static function checkSessionAdmin(){
    self::init();
    if (self::get("user_role") != 'admin' || self::get("user_login") == false ) {
     self::destroy();
     header("Location:./../login.php");
    }
 }

// khởi tạo đối tượng session lưu login, khi nào có đối tượng này thì là đang login
// -> sẽ dùng để validation các trang index của login sau này
 public static function checkLogin(){
   self::init();
   if (self::get("user_login")== true) {
      header("Location:index.php");
   }
 }

// hủy session login đối
// buộc phải login để vào những site nào có checkSession-> 
public static function destroy(){
   session_destroy();
   //header("Location:login.php");
}

}
?>

