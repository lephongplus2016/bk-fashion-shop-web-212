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
			$msg = "<span class='error'>Sản phẩm đã có trong giỏ hàng</span>";
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


	public function getProductCart(){
		$userId = Session::get('user_id');
		$query = "SELECT * FROM tbl_cart WHERE userId = '$userId'";
		$result = $this->db->select($query);
		return $result;
	}
	
// có thì mới hiển thị ở header
// thì mới cho thanh toán
	public function check_cart(){
		$userId = Session::get('user_id');
		$query = "SELECT * FROM tbl_cart WHERE userId = '$userId'";
		$result = $this->db->select($query);
		return $result;
	}	

	public function update_quantity_cart($cartId, $quantity) {
		$cartId = mysqli_real_escape_string($this->db->link, $cartId);
		$quantity = mysqli_real_escape_string($this->db->link, $quantity);

// query
		$query = "UPDATE tbl_cart SET

					quantity = '$quantity'

					WHERE cartId = '$cartId'";
		//  execute
		$result = $this->db->update($query);
		if($result){
			$alert = "<span class='success'>Product quantity Updated Successfully</span>";
			return $alert;
		}else{
			$alert = "<span class='error'>Product quantity Updated Not Success</span>";
			return $alert;
		}			
	}

	public function update_quantity_cart_all($data) {
		// lay so san pham trong cart
		$userId = Session::get('user_id');
		$query = "SELECT * FROM tbl_cart WHERE userId = '$userId'";
		$result = $this->db->select($query);
		$num_pd_cart = $result->$num_rows;
		for ($x = 0; $x <= $num_pd_cart; $x++) {
		  echo $num_pd_cart;
		}

// query
		
	}


	public function delete_product_cart($cartId){
			$query = "DELETE FROM tbl_cart where cartId = '$cartId'";
			$result = $this->db->delete($query);
			if($result){
				// $alert = "<span class='success'>Product in cart Deleted Successfully</span>";
				// return $alert;
				header('Location:shopping-cart.php');
			}else{
				$alert = "<span class='error'>Product in cart Deleted Not Success</span>";
				return $alert;
			}
			
		}




}
?>
