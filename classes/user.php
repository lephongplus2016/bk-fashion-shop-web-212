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
                $alert = "<span class='error'>Email Already Existed ! Please Enter Another Email</span>";
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



}
?>
