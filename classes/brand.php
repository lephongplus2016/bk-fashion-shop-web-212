<?php
	// include '../lib/database.php';
	// include '../helper/format.php';
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');

/**
 * 
 */
class brand
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		// tạo ra 1 instance là có thể dùng các function viết sẵn của class Database và Format rồi
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function insertBrand($name){
		// kiểm tra dấu _ - @% ,... 
		$name = $this->fm->validation($name);

// Hàm này được sử dụng để tạo một chuỗi SQL hợp pháp mà bạn có thể sử dụng trong một câu lệnh SQL.
//  Chuỗi đã cho được mã hóa để tạo chuỗi SQL thoát, có tính đến bộ ký tự hiện tại của kết nối.
//https://www.php.net/manual/en/mysqli.real-escape-string.php
// hàm mysqli_real_escape_string nếu ko dùng có thể bị lỗi "truy vấn sql có lỗi"
// tuy nhiên trong lệnh select này thì ko có vẫn chạy
// $this->db->link chính là connection db được định nghĩa trong database.php		
		$name = mysqli_real_escape_string($this->db->link, $name);
		if(empty($name)){
			$alert = '<span class="error">Brand name must be filled</span>';
			return $alert;
		}
		else{
			// php ko cho dùng query có ``
			$query ="INSERT INTO tbl_brand(brandName) VALUES ('$name')";

			// lệnh insert đã được viết sẵn trong database.php
				$result = $this->db->insert($query);
				if($result){
					$alert = '<span class="success"> Insert Brand successfully</span>';
					return $alert;
				}	
				else{
					$alert = '<span class="success">Insert Brand not successfully</span>';
					return $alert;
				}
			
			
		}

	}


	public function showBrand() {
		// LENH SELECT DA DUOC VIET TRONG DATABASE.PHP
		$query ="SELECT * FROM tbl_brand ORDER BY brandId DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getBrandById($id){
		$query ="SELECT * FROM tbl_brand WHERE brandId = '$id' ORDER BY brandId DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function updateBrand($id,$name){
		$name = $this->fm->validation($name);
	
		$name = mysqli_real_escape_string($this->db->link, $name);
		$id = mysqli_real_escape_string($this->db->link, $id);


		if(empty($name)){
			$alert = '<span class="error">Brand name must be filled</span>';
			return $alert;
		}
		else{
			// php ko cho dùng query có ``
			$query ="UPDATE tbl_brand SET brandName = '$name' WHERE brandId = '$id' ";

			// lệnh insert đã được viết sẵn trong database.php
				$result = $this->db->insert($query);
				if($result){
					$alert = '<span class="success"> Update Brand successfully</span>';
					return $alert;
				}	
				else{
					$alert = '<span class="success">Update Brand not successfully</span>';
					return $alert;
				}
			
			
		}

	}

	public function deleteBrand($id){
		$query ="DELETE FROM tbl_brand WHERE brandId = '$id' ";
		$result = $this->db->delete($query);
		if($result){
			$alert = '<span class="success"> Delete Brand successfully</span>';
			return $alert;
		}	
		else{
			$alert = '<span class="success">Delete Brand not successfully</span>';
			return $alert;
		}
	}
}
?>
