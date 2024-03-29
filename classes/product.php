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

	public function insert_product($data, $file){
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
        if($_FILES["image1"]['name'] ==='' || $_FILES["image2"]['name'] ==='' ||$_FILES["image3"]['name'] ===''|| $_FILES["image4"]['name'] ==='')
                {
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
                    
                    // uploads to folder
                    move_uploaded_file($file_temp,$uploaded_image);
                    $query = "INSERT INTO `tbl_image_product` ( `productId`, `image`) VALUES ( '$this_product_id', '$unique_image');";
                    $result = $this->db->insert($query);
                }
                $alert = "<span class='success'>Thêm sản phẩm thành công</span>";
                return $alert;



        }

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

    public function getProductById($id) {
        $query ="SELECT * FROM tbl_product WHERE productId = '$id' ORDER BY productId DESC";
        $result = $this->db->select($query);
        return $result;
    }


    public function update_product($data, $file, $id){
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
                $query =  "UPDATE `tbl_product` SET 
                `productName` = '$productname', 
                `categoryId`= '$category', 
                `brandId` = '$brand', 
                `price`= '$price', 
                `color` = '$color', 
                `size` = '$size', 
                `model` ='$model', 
                `gender` = '$gender', 
                `season` ='$season', 
                `description` ='$productdes'
                WHERE productId = '$id'" ;
                $result = $this->db->update($query);

                // kiểm tra xem admin có thay đổi ảnh không
                $file_name = $_FILES["image1"]['name'];
                if(!empty($file_name)){
                    //add image
                    $this_product_id = $id;


                    // xóa ảnh cũ
                    $query = "DELETE FROM tbl_image_product where productId = '$this_product_id'";
                    $result = $this->db->delete($query);
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
                            $alert = "<span class='error'>Vui lòng nhập đầy đủ hình ảnh</span>";
                            return $alert;
                        }
                        // uploads to folder
                        move_uploaded_file($file_temp,$uploaded_image);
                        $query = "INSERT INTO `tbl_image_product` ( `productId`, `image`) VALUES ( '$this_product_id', '$unique_image');";
                        $result = $this->db->insert($query);
                    }
                }

                $alert = "<span class='success'>Sửa sản phẩm thành công</span>";
                return $alert;



        }

    }


    public function delete_product($id) {
        $query = "DELETE FROM tbl_product where productId = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert = "<span class='success'>Đã xóa sản phẩm</span>";
                return $alert;
            }else{
                $alert = "<span class='error'>Có lỗi, vui lòng xóa lại</span>";
                return $alert;
            }
    }


    // END ADMIN ==================================================================================================
    // BEGIN SHOP PAGE   =========================================================================================


    public function getProductDetailShopPage($id) {

        $query = "SELECT tbl_product.* , tbl_category.categoryName, tbl_brand.brandName FROM tbl_product INNER JOIN tbl_category ON tbl_product.categoryId = tbl_category.categoryId INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId WHERE tbl_product.productId =  '$id' ";
        $result = $this->db->select($query);
        return $result;
    }


    public function search_product($tukhoa){
        // tìm kiếm thì luôn dùng like rồi
            $tukhoa = $this->fm->validation($tukhoa);
            $query = "SELECT * FROM tbl_product WHERE productName LIKE '%$tukhoa%'";
            $result = $this->db->select($query);
            return $result;

    }


    public function show_product_by_pagination() {
        $number_of_product_per_page = 9;
            if(!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
            $index_page = ($page-1)*$number_of_product_per_page;
        $query = "SELECT *  FROM tbl_product  ORDER BY productId DESC 
        LIMIT $index_page,$number_of_product_per_page
        ";
        $result = $this->db->select($query);
        return $result;
    }

    public function search_product_by_category($categoryID){
        $query = "SELECT * FROM tbl_product WHERE categoryId = '$categoryID' ORDER BY productName ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_product_category_by_pagination($categoryID){
        $number_of_product_per_page = 9;
            if(!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
            $index_page = ($page-1)*$number_of_product_per_page;
        $query = "SELECT *  FROM tbl_product WHERE categoryId = '$categoryID' ORDER BY productName ASC
        LIMIT $index_page,$number_of_product_per_page
        ";
        $result = $this->db->select($query);
        return $result;
    }

    public function search_product_by_brand($brandID){
        $query = "SELECT * FROM tbl_product WHERE brandId = '$brandID' ORDER BY productName ASC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_product_brand_by_pagination($brandID){
        $number_of_product_per_page = 9;
            if(!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
            $index_page = ($page-1)*$number_of_product_per_page;
        $query = "SELECT *  FROM tbl_product WHERE brandId = '$brandID' ORDER BY productName ASC
        LIMIT $index_page,$number_of_product_per_page
        ";
        $result = $this->db->select($query);
        return $result;
    }

    public function search_product_by_price($pricelv){
        switch ($pricelv) {
            case 0:
                $query = "SELECT * FROM tbl_product WHERE price < 200000 ORDER BY price ASC";
                break;
            case 1:
                $query = "SELECT * FROM tbl_product WHERE price >= 200000 AND price < 500000 ORDER BY price ASC";
                break;
            case 2:
                $query = "SELECT * FROM tbl_product WHERE price >= 500000 AND price < 1000000 ORDER BY price ASC";
                break;
            case 3:
                $query = "SELECT * FROM tbl_product WHERE price >= 1000000 AND price < 2000000 ORDER BY price ASC";
                break;
            case 4:
                $query = "SELECT * FROM tbl_product WHERE price >= 2000000 AND price < 5000000 ORDER BY price ASC";
                break;
            case 5:
                $query = "SELECT * FROM tbl_product WHERE price >= 5000000 ORDER BY price ASC";
                break;           
            default: break;              
          }
        $result = $this->db->select($query);
        return $result;
    }

    public function show_product_price_by_pagination($pricelv){
        $number_of_product_per_page = 9;
            if(!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
            $index_page = ($page-1)*$number_of_product_per_page;

            switch ($pricelv) {
                case 0:
                    $query = "SELECT * FROM tbl_product WHERE price < 200000 ORDER BY price ASC LIMIT $index_page,$number_of_product_per_page";
                    break;
                case 1:
                    $query = "SELECT * FROM tbl_product WHERE price >= 200000 AND price < 500000 ORDER BY price ASC LIMIT $index_page,$number_of_product_per_page";
                    break;
                case 2:
                    $query = "SELECT * FROM tbl_product WHERE price >= 500000 AND price < 1000000 ORDER BY price ASC LIMIT $index_page,$number_of_product_per_page";
                    break;
                case 3:
                    $query = "SELECT * FROM tbl_product WHERE price >= 1000000 AND price < 2000000 ORDER BY price ASC LIMIT $index_page,$number_of_product_per_page";
                    break;
                case 4:
                    $query = "SELECT * FROM tbl_product WHERE price >= 2000000 AND price < 5000000 ORDER BY price ASC LIMIT $index_page,$number_of_product_per_page";
                    break;
                case 5:
                    $query = "SELECT * FROM tbl_product WHERE price >= 5000000 ORDER BY price ASC LIMIT $index_page,$number_of_product_per_page";
                    break;           
                default: break;              
              }
        $result = $this->db->select($query);
        return $result;
    }

    public function getProductByLink($productLink){
        $query = "SELECT * FROM tbl_product";
        $result = $this->db->select($query);
        if ($result != false){
            while ($product = $result->fetch_assoc()){
                $tempStr = $product['productName'].' '.$product['model'];
                if($productLink == vn_to_str($tempStr)){
                    return $product;
                }
            }
        }
        return false;
    }
}
?>
