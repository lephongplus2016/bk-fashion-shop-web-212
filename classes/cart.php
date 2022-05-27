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
						// set cart session
					    $quantity = $data['quantity'];
					    $price = $data['price'];
					    $oldQty = Session::get('qty');
					    Session::set('qty',$oldQty + $quantity);
					    $oldPrice = Session::get('sum');
					    Session::set('sum',$oldPrice + $price*$quantity);
					    // end cart session

						$msg = "<span class='success'>Sản phẩm đã được thêm vào giỏ hàng</span>";
						return $msg;
					}	
					else{
						header('Location:404.php');

					}
		}
		
	}


	public function getProductCart(){
		$user_id = Session::get('user_id');
		// if (empty($user_id)){
		$login_check = Session::get('user_login'); 
        if($login_check==false){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart_guest WHERE sId = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}
		else{
			$query = "SELECT * FROM tbl_cart WHERE userId = '$user_id'";
			$result = $this->db->select($query);
			return $result;
		}
		
	}
	
// có thì mới hiển thị ở header
// thì mới cho thanh toán
	public function check_cart(){
		$user_id = Session::get('user_id');
		if (empty($user_id)){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart_guest WHERE sId = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}
		$query = "SELECT * FROM tbl_cart WHERE userId = '$user_id'";
		$result = $this->db->select($query);
		return $result;
	}	

	public function update_quantity_cart($cartId, $quantity) {
		$cartId = mysqli_real_escape_string($this->db->link, $cartId);
		$quantity = mysqli_real_escape_string($this->db->link, $quantity);


		$user_id = Session::get('user_id');
		if (empty($user_id)){
			$query = "UPDATE tbl_cart_guest SET

					quantity = '$quantity'

					WHERE cartId = '$cartId'";
		//  execute
		$result = $this->db->update($query);
			return $result;
		}
		else {
			// query
			$query = "UPDATE tbl_cart SET

						quantity = '$quantity'

						WHERE cartId = '$cartId'";
			//  execute
			$result = $this->db->update($query);
			return $result;
		}

		// if($result){
		// 	$alert = "<span class='success'>Product quantity Updated Successfully</span>";
		// 	return $alert;
		// }else{
		// 	$alert = "<span class='error'>Product quantity Updated Not Success</span>";
		// 	return $alert;
		// }			
	}

	public function update_quantity_cart_all($data) {
		// lay so san pham trong cart
		$user_id = Session::get('user_id');
		if (empty($user_id)){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart_guest WHERE sId = '$sId'";
		}
		else{
			$query = "SELECT * FROM tbl_cart WHERE userId = '$user_id'";
		}
		$getnum = $this->db->select($query);
		if ($getnum != false){
			$num_pd_cart = $getnum->num_rows;
			for ($x = 0; $x < $num_pd_cart; $x++) {
				$cartId = $data['cartId_'.$x];
				$quantity = $data['quantity_'.$x];
				$result = $this->update_quantity_cart($cartId,$quantity);
			}
			if($result){
				$alert = "<span class='success'>Cập nhật số lượng thành công</span>";
				return $alert;
			}else{
				$alert = "<span class='error'>Cập nhật số lượng không thành công</span>";
				return $alert;
			}	
		}	
		return false;
	}


	public function delete_product_cart($cartId){
		$user_id = Session::get('user_id');
		if (empty($user_id)){
			$query = "DELETE FROM tbl_cart_guest where cartId = '$cartId'";
		}
		else {
			$query = "DELETE FROM tbl_cart where cartId = '$cartId'";

		}
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Đã xóa khỏi giỏ hàng</span>";
				return $alert;
				// header('Location:shopping-cart.php');
			}else{
				$alert = "<span class='error'>Chưa xóa khỏi giỏ hàng</span>";
				return $alert;
			}
			
		}


	// cho khách
	public function insert_cart_guest($id,$data){
		$quantity = $this->fm->validation($data['quantity']);

		$productId = mysqli_real_escape_string($this->db->link, $id);
		$sId = session_id();
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
		$queryCheckAdded = "SELECT * FROM tbl_cart_guest WHERE productId = '$productId' AND sId = '$sId' ";
		$result_queryCheckAdded = $this->db->select($queryCheckAdded);
		if($result_queryCheckAdded){
			$msg = "<span class='error'>Sản phẩm đã có trong giỏ hàng</span>";
			return $msg;
		}
		// còn chưa thì insert
		else {		
				$query_insert ="INSERT INTO tbl_cart_guest (productId, sId, productName, price, quantity, image, size) VALUES ('$productId', 
			'$sId','$productName','$price', '$quantity',  '$image', $size)";
						$result_insert = $this->db->insert($query_insert);
					if($result_insert){
						// set cart session
					    $quantity = $data['quantity'];
					    $price = $data['price'];
					    $oldQty = Session::get('qty');
					    Session::set('qty',$oldQty + $quantity);
					    $oldPrice = Session::get('sum');
					    Session::set('sum',$oldPrice + $price*$quantity);
					    // end cart session
						$msg = "<span class='success'>Sản phẩm đã được thêm vào giỏ hàng</span>";
						return $msg;
					}	
					else{
						header('Location:404.php');

					}
		}
		
	}


	// begin handle order============================================================================
	public function insertOrder($data){
		$user_id = Session::get('user_id');
		$query = "SELECT * FROM tbl_cart WHERE userID = '$user_id'";
		$get_product = $this->db->select($query);
		if($get_product){
			while($result = $get_product->fetch_assoc()){
				$productid = $result['productId'];
				$productName = $result['productName'];
				$quantity = $result['quantity'];
				$price = $result['price'] * $quantity;
				$image = $result['image'];
				$size = $result['size'];
				$user_id = $user_id;
				$note = $data['note'];
				$paymentType = $data['payment'];
				$query_order = "INSERT INTO tbl_order(productId,productName,quantity,price,image,userId,size,note,paymentType,status) VALUES('$productid','$productName','$quantity','$price','$image','$user_id','$size','$note','$paymentType', '0')";
				$insert_order = $this->db->insert($query_order);
			}
		}
	}

	public function del_all_data_cart(){
		$user_id = Session::get('user_id');
		$query = "DELETE FROM tbl_cart WHERE userId = '$user_id'";
		return $this->db->delete($query);
	}
	
	public function get_cart_ordered($user_id){
			$query = "SELECT * FROM tbl_order WHERE userId = '$user_id' ORDER BY orderId DESC";
			$get_cart_ordered = $this->db->select($query);
			return $get_cart_ordered;
	}

	// xu ly cho order admin
	public function get_all_order(){
			$query = "SELECT * FROM tbl_order ORDER BY datetime DESC";
			$get_cart_ordered = $this->db->select($query);
			return $get_cart_ordered;
	}

	public function delete_order($id,$time,$productId){
			$id = mysqli_real_escape_string($this->db->link, $id);
			$time = mysqli_real_escape_string($this->db->link, $time);
			$productId = mysqli_real_escape_string($this->db->link, $productId);
			$query = "DELETE FROM tbl_order 
					WHERE orderId = '$id' AND datetime='$time' AND productId ='$productId'";
			$result = $this->db->update($query);
			if($result){
				$msg = "<span class='success'>Xóa order thành công</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>Xóa order thất bại</span>";
				return $msg;
			}
		}

	public function get_order_by_id($id){
		$id = mysqli_real_escape_string($this->db->link, $id);
		$query = "SELECT * FROM tbl_order WHERE orderId = '$id'";
		$result = $this->db->select($query);
		return $result;
	}

	public function set_status_order($id, $status){
			$id = mysqli_real_escape_string($this->db->link, $id);
			$status = mysqli_real_escape_string($this->db->link, $status);
			
			$query = "UPDATE tbl_order SET

					status = '$status'

					WHERE orderId = '$id'";

			$result = $this->db->update($query);
			return $query;
		}
	// end handle order============================================================================

}
?>
