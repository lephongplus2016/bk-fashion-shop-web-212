<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');


class Banner
{
    private $db;
	private $fm;
	
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

    public function insert_banner($data, $file)
    {
        $name = mysqli_real_escape_string($this->db->link, $data['bannerName']);
        $status = 0;

        if (trim($name) == ""){
            return "Chưa điền tiêu đề";
        }
        if (isset($file["img"]) && $file["img"]['error'] <= 0){
            $file_name = $file["img"]['name'];
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_temp = $_FILES["img"]['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));

            if(in_array($file_ext, $permited) === false){
                return "Đuôi file tải lên không hợp lệ";
            }

            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "../img/banner/".$unique_image;

            move_uploaded_file($file_temp,$uploaded_image);

            $query = "INSERT INTO `tbl_banner`(`bannerName`, `bannerImage`, `status`) 
                      VALUES ('$name','$unique_image','$status');";
            if ($this->db->insert($query) === false) return $this->db->error;
            return true;
        }
        else return "Không có file tải lên";
    }

    public function show_banners()
    {
        $query = "SELECT * FROM `tbl_banner` ORDER BY bannerId DESC;";
        return $this->db->select($query);
    }

    public function show_banners_active()
    {
        $query = "SELECT * FROM `tbl_banner` WHERE `status` = 1;";
        return $this->db->select($query);
    }

    public function getImgBannerById($id)
    {
        $query = "SELECT `bannerImage` FROM `tbl_banner` WHERE `bannerId` = '$id';";
        $result = $this->db->select($query);
        if ($result != false){
            $row = $result->fetch_assoc();
            return $row["bannerImage"];
        }
        else return false;
    }

    public function delete_banner($id)
    { 
        $image = $this->getImgBannerById($id);
        if ($image != false){
            $delete_image = "../img/banner/".$image;
            unlink($delete_image);
        }
        else return $this->db->error;
        $query = "DELETE FROM `tbl_banner` WHERE `bannerId` = '$id';";
        if ($this->db->delete($query) === false) return $this->db->error;
        return true;
    }

    public function changeStatus($id, $status)
    {   
        if ($status==="true") $temp = 1;
        else $temp = 0;
        $query = "UPDATE `tbl_banner` SET `status`='$temp' WHERE `bannerId` = '$id';";
        if ($this->db->update($query) === false) return false;
        return true;
    }
}
