<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');

/**
 * 
 */
class comment
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		// tạo ra 1 instance là có thể dùng các function viết sẵn của class Database và Format rồi
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function insert_comment($data, $file, $productId){
        $content = mysqli_real_escape_string($this->db->link, $data['content']);
        $userId = Session::get('user_id');
        $unique_image = "";
        if(!empty($file) && $_FILES["image1"]['name'] != ""){
        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES["image1"]['name'];
        $file_size = $_FILES["image1"]['size'];
        $file_temp = $_FILES["image1"]['tmp_name'];
       $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()+1), 0, 10).'.'.$file_ext;
        $uploaded_image = "img/comment/".$unique_image;
        move_uploaded_file($file_temp,$uploaded_image);
        }
        if($content=="" && $unique_image ===""){
                $alert = "<span class='error'>Hãy nhập ít nhất một trường</span>";
                return $alert;
        }
        else{
                $query =  "INSERT INTO `tbl_comment_product` (`userId`, `productId`, `content`, `image`) VALUES ( '$userId', '$productId', '$content', '$unique_image');";
                $result = $this->db->insert($query);

                $alert = "<span class='success'>Đã bình luận thành công</span>";
                return $alert;
        }

    }
    public function getImgByCommentProductId($id) {
        $query = "SELECT * FROM `tbl_comment_product` WHERE productId = '$id' ORDER BY commentId DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function getNameUserComment($userId) {
        $query = "SELECT * FROM `tbl_user` WHERE userId = '$userId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_comment($CommentId) {
        $query = "DELETE FROM tbl_comment_product where commentId = '$CommentId'";
        $result = $this->db->delete($query);
        if($result){
            $alert = "<span class='success'>Đã xóa bình luận</span>";
            return $alert;
        }else{
            $alert = "<span class='error'>Có lỗi, vui lòng xóa lại</span>";
            return $alert;
        }
    }
}
?>
