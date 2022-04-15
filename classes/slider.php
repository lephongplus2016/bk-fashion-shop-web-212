<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');


class Slider
{
    private $db;
	private $fm;
	
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

    public function insert_slider($data, $file)
    {
        $collection = mysqli_real_escape_string($this->db->link, $data['collection']);
        $name = mysqli_real_escape_string($this->db->link, $data['sliderName']);
        $content = mysqli_real_escape_string($this->db->link, $data['contents']);
        
        if(isset($data['status'])){
            $status = 1;
        }
        else $status = 0;

        if (trim($collection) == "" || trim($name) == ""){
            return "Chưa điền các trường bắt buộc";
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
            $uploaded_image = "../img/hero/".$unique_image;

            move_uploaded_file($file_temp,$uploaded_image);

            $query = "INSERT INTO `tbl_slider`(`collectionName`,`sliderName`,`description`,`sliderImage`,`status`) 
                      VALUES ('$collection','$name','$content','$unique_image','$status');";
            if ($this->db->insert($query) === false) return $this->db->error;
            return true;
        }
        else return "Không có file tải lên";
    }

    public function show_slider()
    {
        $query = "SELECT * FROM `tbl_slider` ORDER BY id DESC;";
        return $this->db->select($query);
    }

    public function getSliderById($id)
    {
        $query = "SELECT * FROM `tbl_slider` WHERE id = '$id';";
        return $this->db->select($query);
    }

    public function getImgSliderById($id)
    {
        $query = "SELECT `sliderImage` FROM `tbl_slider` WHERE `id` = '$id';";
        $result = $this->db->select($query);
        if ($result != false){
            $row = $result->fetch_assoc();
            return $row["sliderImage"];
        }
        else return false;
    }

    public function update_slider($data, $file, $id)
    {
        $collection = mysqli_real_escape_string($this->db->link, $data['collection']);
        $name = mysqli_real_escape_string($this->db->link, $data['sliderName']);
        $content = mysqli_real_escape_string($this->db->link, $data['contents']);
        
        if(isset($data['status'])){
            $status = 1;
        }
        else $status = 0;

        if (trim($collection) == "" || trim($name) == ""){
            return "Chưa điền các trường bắt buộc";
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
            $uploaded_image = "../img/hero/".$unique_image;

            $old_image = $this->getImgSliderById($id);
            if ($old_image != false){
                $delete_image = "../img/hero/".$old_image;
                unlink($delete_image);
            }
            else return "Lỗi xóa hình";

            move_uploaded_file($file_temp,$uploaded_image);

            $query = "UPDATE `tbl_slider` SET
                    `collectionName`='$collection', `sliderName`='$name', `description`='$content',
                    `sliderImage`='$unique_image', `status`='$status'
                    WHERE `id` = '$id';";
            if ($this->db->update($query) === false) return $this->db->error;
            return true;
        }
        else 
        {
            $query = "UPDATE `tbl_slider` SET
            `collectionName`='$collection', `sliderName`='$name', `description`='$content', `status`='$status'
            WHERE `id` = '$id';";
            if ($this->db->update($query) === false) return $this->db->error;
            return true;
        }
    }

    public function delete_slider($id)
    { 
        $image = $this->getImgSliderById($id);
        if ($image != false){
            $delete_image = "../img/hero/".$image;
            unlink($delete_image);
        }
        else return $this->db->error;
        $query = "DELETE FROM `tbl_slider` WHERE `id` = '$id';";
        if ($this->db->delete($query) === false) return $this->db->error;
        return true;
    }
}
