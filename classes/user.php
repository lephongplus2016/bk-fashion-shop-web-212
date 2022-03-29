<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');

/**
 * 
 */
class user
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		// tạo ra 1 instance là có thể dùng các function viết sẵn của class Database và Format rồi
		$this->db = new Database();
		$this->fm = new Format();
	}
    // riêng biệt

	public function show_user(){
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result; 
        // return "abd";
    }
    public function insert_user($data){
        // return $data;
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $address = mysqli_real_escape_string($this->db->link, $data['address']);
        $phone = mysqli_real_escape_string($this->db->link, $data['phone']);
        // password mã hóa md5
        $password = mysqli_real_escape_string($this->db->link, md5($data['password']));
        $password2 = mysqli_real_escape_string($this->db->link, md5($data['password2']));
        if ($password != $password2){
            $alert = "<span class='error'>Password nhập lại không đúng!</span>";
            return $alert;
        }

        // kiểm tra dữ liệu rỗng
        if($name==""  || $email=="" || $address=="" || $phone =="" || $password ==""){
            $alert = "<span class='error'>Các trường không được rỗng</span>";
            return $alert;
        }else{
            // đặc biệt email là trường unique nên cần check riêng
            $check_email = "SELECT * FROM tbl_user WHERE email='$email' LIMIT 1";
            $result_check = $this->db->select($check_email);
            if($result_check){
                $alert = "<span class='error'>Email đã được sử dụng, vui lòng chọn email khác</span>";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_user(name,email,address,phone,password, role) VALUES('$name','$email', '$address', '$phone', '$password','customer')";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "<span class='success'>Tạo tài khoản thành công!</span>";
                    return $alert;
                }else{
                    $alert = "<span class='error'>Tạo tài khoản thất bại, vui lòng thử lại!</span>";
                    return $alert;
                }
            }
        }
    }

    public function login_user($data){

            $email = mysqli_real_escape_string($this->db->link, $data['email']);
            $password = mysqli_real_escape_string($this->db->link, md5($data['password']));
            if($email=='' || $password==''){
                $alert = "<span class='error'>Password and Email must be not empty</span>";
                return $alert;
            }else{
                $check_login = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
                $result_check = $this->db->select($check_login);
                if($result_check){

                    $value = $result_check->fetch_assoc();
                    // lưu session đã login lại
                    Session::set('user_login',true);
                    Session::set('user_id',$value['userId']);
                    Session::set('user_name',$value['name']);
                    Session::set('user_role',$value['role']);
                    $alert = "<span class='success'>Đăng nhập thành công <a href='shopping-cart.php'>Đến trang thanh toán</a></span>";
                        return $alert;
                }else{
                    $alert = "<span class='error'>Sai email hoặc password</span>";
                    return $alert;
                }
            }
        }










}
?>
