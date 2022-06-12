<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../lib/session.php');
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
                    return true;
                }else{
                    $alert = "<span class='error'>Sai email hoặc password</span>";
                    return $alert;
                }
            }
        }
        public function getUserById($id) {
            $query ="SELECT * FROM tbl_user WHERE userId = '$id' ORDER BY userId DESC";
            $result = $this->db->select($query);
            return $result;
        }


        public function update_user($data, $file, $userId){
            $userName = mysqli_real_escape_string($this->db->link, $data['userName']);
            $userMail = mysqli_real_escape_string($this->db->link, $data['userMail']);
            $userAdress = mysqli_real_escape_string($this->db->link, $data['userAdress']);
            $userPhone = mysqli_real_escape_string($this->db->link, $data['userPhone']);
            $role = mysqli_real_escape_string($this->db->link, $data['role']);
            if($userName=="" || $userMail=="" || $userAdress=="" || $userPhone==""){
                    $alert = "<span class='error'>Các trường không được rỗng</span>";
                    return $alert;
            }
            else{
                    $query =  "UPDATE `tbl_user` SET 
                    `name` = '$userName', 
                    `email`= '$userMail', 
                    `address` = '$userAdress', 
                    `phone`= '$userPhone', 
                    `role` = '$role'
                    WHERE userId = '$userId'" ;
                    $result = $this->db->update($query);
                    $alert = "<span class='success'>Sửa thông tin thành công</span>";
                    return $alert;
            }
            
        }
        public function delete_user($userId) {
            $query = "DELETE FROM tbl_user where userId = '$userId'";
                $result = $this->db->delete($query);
                if($result){
                    $alert = "<span class='success'>Đã xóa người dùng</span>";
                    return $alert;
                }else{
                    $alert = "<span class='error'>Có lỗi, vui lòng xóa lại</span>";
                    return $alert;
                }
        }

        public function profile_edit($userId, $name, $email, $address, $phone){
            $query = "UPDATE `tbl_user` SET 
            `name` = '$name', 
            `email`= '$email', 
            `address` = '$address', 
            `phone`= '$phone'
            WHERE userId = '$userId'" ;
            if ($this->db->update($query)){
                Session::set('user_name', $name);
                return true;
            }
            else return false;
        }

        public function password_edit($id, $new_password) {
            $password = md5($new_password);
            $query = "UPDATE `tbl_user` SET 
            `password` = '$password'
            WHERE userId = '$id'";
            if ($this->db->update($query)){
                return true;
            }
            else return false;
        }

        public function profile_check_unique_email($id, $email){
            $check_email = "SELECT * FROM tbl_user WHERE email='$email' and userId != $id";
            if ($this->db->select($check_email) === false) return true;
            else return false;
        }

        public function check_only_password($id,$password){
            $password = md5($password);
            $query = "SELECT * FROM tbl_user WHERE password='$password' and userId = $id";

            if ($this->db->select($query) != false) return true;
            else return false;
        }


}
?>
