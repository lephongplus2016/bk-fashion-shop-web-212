
<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');
	// include_once để tránh lỗi config bị gọi liên tục-> lỗi hằng


/**
 * 
 */
class category
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		// tạo ra 1 instance là có thể dùng các function viết sẵn của class Database và Format rồi
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function insertCategory($name){
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
			$alert = '<span class="error">Category name must be filled</span>';
			return $alert;
		}
		else{
			// php ko cho dùng query có ``
			
			$query ="INSERT INTO tbl_category(categoryName) VALUES ('$name')";

			// lệnh insert đã được viết sẵn trong database.php
				$result = $this->db->insert($query);
				if($result){
					$alert = '<span class="success"> Insert category successfully</span>';
					return $alert;
				}	
				else{
					$alert = '<span class="success">Insert category not successfully</span>';
					return $alert;
				}
			
			
		}

	}


	public function showCategory() {
		// LENH SELECT DA DUOC VIET TRONG DATABASE.PHP
		$query ="SELECT * FROM tbl_category ORDER BY categoryId DESC";
		$result = $this->db->select($query);
		return $result;
	}
	public function showCategorybyName(){
		$query ="SELECT * FROM tbl_category ORDER BY categoryName ASC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getCatById($id){
		$query ="SELECT * FROM tbl_category WHERE categoryId = '$id' ORDER BY categoryId DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function updateCategory($id,$name){
		$name = $this->fm->validation($name);
	
		$name = mysqli_real_escape_string($this->db->link, $name);
		$id = mysqli_real_escape_string($this->db->link, $id);


		if(empty($name)){
			$alert = '<span class="error">Category name must be filled</span>';
			return $alert;
		}
		else{
			// php ko cho dùng query có ``
			$query ="UPDATE tbl_category SET categoryName = '$name' WHERE categoryId = '$id' ";

			// lệnh insert đã được viết sẵn trong database.php
				$result = $this->db->insert($query);
				if($result){
					$alert = '<span class="success"> Update category successfully</span>';
					return $alert;
				}	
				else{
					$alert = '<span class="success">Update category not successfully</span>';
					return $alert;
				}
			
			
		}

	}

	public function del_category($id){
		$query ="DELETE FROM tbl_category WHERE categoryId = '$id' ";
		$result = $this->db->delete($query);
		if($result){
			$alert = '<span class="success"> Delete category successfully</span>';
			return $alert;
		}	
		else{
			$alert = '<span class="success">Delete category not successfully</span>';
			return $alert;
		}
	}

// FONT END ===============================================================================

	public function showCategoryFontend() {
		// LENH SELECT DA DUOC VIET TRONG DATABASE.PHP
		$query ="SELECteT * FROM tbl_category ORDER BY categoryId DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getNameCat($categoryId){
		$query = "SELECT * FROM tbl_category WHERE categoryId = '$categoryId'";
		$result = $this->db->select($query);
		return $result;
	}

}
?>
