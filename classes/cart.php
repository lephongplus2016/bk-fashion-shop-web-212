<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');

class cart
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function insert_cart($id, $userId,$data){
		$quantity = $this->fm->validation($data['quantity']);

		$productId = mysqli_real_escape_string($this->db->link, $id);
		$userId = mysqli_real_escape_string($this->db->link, $userId);
		$size = mysqli_real_escape_string($this->db->link, $data['size']);
		

		// lấy product record đang buy
		$query = "SELECT * FROM tbl_product WHERE productId = '$productId' ";
		$result = $this->db->select($query)->fetch_assoc();
		// echo print_r($result);

		// lấy các trường cần thiết
		$productName = $result['productName'];
		$price = $result['price'];

		// lấy hình ảnh sản phẩm
		$query = "SELECT * FROM `tbl_image_product` WHERE productId = '$productId'";
		$image_list = $this->db->select($query);
		while($i = $image_list->fetch_assoc())
        {
        	$image = $i['image'];
        	break;
        }
        

		// kiểm tra đã có chưa
		$queryCheckAdded = "SELECT * FROM tbl_cart WHERE productId = '$productId' AND userId = '$userId' ";
		$result_queryCheckAdded = $this->db->select($queryCheckAdded);
		if($result_queryCheckAdded){
			$msg = "<span class='error'>Sản phẩm đã được thêm vào</span>";
			return $msg;
		}
		// còn chưa thì insert
		else {
				$query_insert ="INSERT INTO tbl_cart (productId, userId, productName, price, quantity, image, size) VALUES ('$productId', 
			'$userId','$productName','$price', '$quantity',  '$image', $size)";

					$result_insert = $this->db->insert($query_insert);
					if($result_insert){
						$msg = "<span class='success'>Sản phẩm đã được thêm vào giỏ hàng</span>";
						return $msg;
					}	
					else{
						header('Location:404.php');

					}
		}
		
	}


	public function getProductCart($userId){
		$query = "SELECT * FROM tbl_cart WHERE userId = '$userId'";
		$result = $this->db->select($query);
		return $result;
	}
	

}
?>
