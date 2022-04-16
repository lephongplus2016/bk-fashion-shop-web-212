<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');
	include "product.php";

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
		return $userId;

		// lấy product record đang buy
		$query = "SELECT * FROM tbl_product WHERE productId = '$productId' ";
		$result = $this->db->select($query)->fetch_assoc();
		// echo print_r($result);

		// lấy các trường cần thiết
		$productName = $result['productName'];
		$price = $result['price'];
		// lấy hình ảnh sản phẩm
		$image_list = $product->getImgByProductId($id);
		while($i = $image_list->fetch_assoc())
        {
        	$image = $i['image'];
        	break;
        }
		// đang làm ở đây 

		// kiểm tra đã có chưa
		$queryCheckAdded = "SELECT * FROM tbl_cart WHERE productId = '$id' AND sId = '$sId' ";
		$result_queryCheckAdded = $this->db->select($queryCheckAdded);
		if($result_queryCheckAdded){
			$msg = "<span class='error'>Sản phẩm đã được thêm vào</span>";
			return $msg;
		}
		// còn chưa thì insert
		else {
				$query_insert ="INSERT INTO tbl_cart(productId, sId, productName, price, quantity, image) VALUES ('$id', 
			'$sId','$productName','$price', '$quantity',  '$image')";

				// lệnh insert đã được viết sẵn trong database.php
					$result_insert = $this->db->insert($query_insert);
					if($result_insert){
						// điều hướng trang - lệnh của php
						header('Location:cart.php');
					}	
					else{
						header('Location:404.php');

					}
		}
		
	}

	

}
?>
