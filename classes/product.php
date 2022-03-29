<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');

/**
 * 
 */
class product
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		// tạo ra 1 instance là có thể dùng các function viết sẵn của class Database và Format rồi
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function inser_product($data, $file){
        $productname = mysqli_real_escape_string($this->db->link, $data['productname']);
        $category = mysqli_real_escape_string($this->db->link, $data['category']);
        $brand = mysqli_real_escape_string($this->db->link, $data['brand']);
        $productdes = mysqli_real_escape_string($this->db->link, $data['productdes']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
        $color = mysqli_real_escape_string($this->db->link, $data['color']);
        $size = mysqli_real_escape_string($this->db->link, $data['size']);
        $model = mysqli_real_escape_string($this->db->link, $data['model']);
        $gender = mysqli_real_escape_string($this->db->link, $data['gender']);
        $season = mysqli_real_escape_string($this->db->link, $data['season']);


        // check input 
        if($productname=="" || $brand=="" || $category=="" || $productdes=="" || $price=="" || $color=="" || $size =="" || $model =="" || $gender ==""|| $season ==""){
                $alert = "<span class='error'>Các trường không được rỗng</span>";
                return $alert;
        }
        else{
                $query =  "INSERT INTO `tbl_product` (`productName`, `categoryId`, `brandId`, `price`, `color`, `size`, `model`, `gender`, `season`, `description`) VALUES ( '$productname', '$category', '$brand', '$price', '$color', '$size', '$model', '$gender', '$season', '$productdes');";
                $result = $this->db->insert($query);
                


                //add image
                $query = "SELECT * FROM tbl_product ORDER BY productId DESC LIMIT 1";
                $result = $this->db->select($query);
                $this_product_id = 0;
                if($result != false) { // tránh lỗi do ko có record nào
                    while($row = $result->fetch_assoc())
                        {
                            $this_product_id = $row['productId'];
                        }
                    }
                // lay hinh anh
                for ($x = 1; $x < 5; $x++) {
                  //Kiem tra hình ảnh và lấy hình ảnh cho vào folder upload======================================
                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES["image".$x]['name'];
                    $file_size = $_FILES["image".$x]['size'];
                    $file_temp = $_FILES["image".$x]['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()+$x), 0, 10).'.'.$file_ext;
                    $uploaded_image = "../img/product/".$unique_image;
                    //==============================================================================================

                    if($file_name ==='')
                    {
                        $alert = "<span class='error'>Các trường không được rỗng</span>";
                        return $alert;
                    }
                    // uploads to folder
                    move_uploaded_file($file_temp,$uploaded_image);
                    $query = "INSERT INTO `tbl_image_product` ( `productId`, `image`) VALUES ( '$this_product_id', '$unique_image');";
                    $result = $this->db->insert($query);
                }
                $alert = "<span class='success'>Thêm sản phẩm thành công</span>";
                return $alert;



        }

        return $this_product_id;
    }
    

    public function show_product() {
        // LENH SELECT DA DUOC VIET TRONG DATABASE.PHP
        //$query ="SELECT * FROM tbl_product ORDER BY productID DESC";
        // với 1 table có reference data tới table khác ta cần inner join
        $query = "SELECT tbl_product.* , tbl_category.categoryName, tbl_brand.brandName 
        FROM tbl_product INNER JOIN tbl_category ON tbl_product.categoryId = tbl_category.categoryId
         INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
         ORDER BY tbl_product.productId DESC
        ";
        $result = $this->db->select($query);
        return $result;
    }

    public function getImgByProductId($id) {
        $query = "SELECT * FROM `tbl_image_product` WHERE productId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }






}
?>
