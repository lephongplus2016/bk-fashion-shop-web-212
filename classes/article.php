<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');


class Article
{
    private $db;
	private $fm;
	
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

    public function insert_article($data, $file)
    {
        $title = mysqli_real_escape_string($this->db->link, $data['articleTitle']);
        $author = mysqli_real_escape_string($this->db->link, $data['author']);
        $content = mysqli_real_escape_string($this->db->link, $data['contents']);

        if (trim($title) == "" || trim($author) == ""){
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
            $uploaded_image = "../img/article/".$unique_image;

            move_uploaded_file($file_temp,$uploaded_image);
            $query = "INSERT INTO `tbl_article`(`title`, `content`, `writer`) VALUES ('$title', '$content', '$author');";
            if ($this->db->insert($query) === false) return $this->db->error;
            $query = "SELECT max(id) AS id FROM tbl_article;";
            $result = $this->db->select($query);
            if ($result === false) return $this->db->error;
            $row = $result->fetch_assoc();
            $this_article_id = $row["id"];
            $query = "INSERT INTO `tbl_image_article`(`articleId`, `image`) VALUES ('$this_article_id','$unique_image');";
            $result = $this->db->insert($query);
            if ($result === false) return $this->db->error;
            return true;
        }
        else return "Không có file tải lên";
    }

    public function show_article()
    {
        $query = "SELECT `tbl_article`.* , `tbl_image_article`.`image`
                FROM `tbl_article` JOIN `tbl_image_article` ON `tbl_article`.`id` =`tbl_image_article`.`articleId`
                ORDER BY `tbl_article`.`id` DESC;";
        return $this->db->select($query);
    }

    public function getArticleById($id)
    {
        $query = "SELECT * FROM `tbl_article` WHERE id = '$id';";
        return $this->db->select($query);
    }

    public function getImgArticleById($id)
    {
        $query = "SELECT `image` FROM `tbl_image_article` WHERE `articleId` = '$id';";
        $result = $this->db->select($query);
        if ($result != false){
            $row = $result->fetch_assoc();
            return $row["image"];
        }
        else return false;
    }

    public function getDetailsArticleById($id)
    {
        $query = "SELECT `tbl_article`.* , `tbl_image_article`.`image`
                FROM `tbl_article` JOIN `tbl_image_article` ON `tbl_article`.`id` =`tbl_image_article`.`articleId`
                WHERE `tbl_article`.`id` = '$id';";
        return $this->db->select($query);
    }

    public function update_article($data, $file, $id)
    {
        $title = mysqli_real_escape_string($this->db->link, $data['articleTitle']);
        $author = mysqli_real_escape_string($this->db->link, $data['author']);
        $content = mysqli_real_escape_string($this->db->link, $data['contents']);

        if (trim($title) == "" || trim($author) == ""){
            return "Để trống các trường bắt buộc";;
        }
        if (isset($file["img"]) && $file["img"]['error'] <= 0){
            $file_name = $file["img"]['name'];
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_temp = $_FILES["img"]['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));

            if(in_array($file_ext, $permited) === false){
                return "Đuôi file không hợp lệ";
            }

            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "../img/article/".$unique_image;

            $old_image = $this->getImgArticleById($id);
            if ($old_image != false){
                $delete_image = "../img/article/".$old_image;
                unlink($delete_image);
                $query = "DELETE FROM `tbl_image_article` WHERE `articleId` = '$id';";
                $this->db->delete($query);
            }
            else return "Lỗi lấy hình";

            move_uploaded_file($file_temp,$uploaded_image);
            $query = "INSERT INTO `tbl_image_article`(`articleId`, `image`) VALUES ('$id','$unique_image');";
            $result = $this->db->insert($query);
            if ($result === false) return "Cơ sở dữ liệu";
        }
        

        $query = "UPDATE `tbl_article` SET
        `title` = '$title',
        `content` = '$content',
        `writer` = '$author'
        WHERE `id` = '$id';";
        $result = $this->db->update($query);
        if ($result === false) return "Cơ sở dữ liệu";
        return true;
    }

    public function delete_article($id)
    { 
        $image = $this->getImgArticleById($id);
        if ($image != false){
            $delete_image = "../img/article/".$image;
            unlink($delete_image);
            $query = "DELETE FROM `tbl_image_article` WHERE `articleId` = '$id';";
            $this->db->delete($query);
        }
        $query = "DELETE FROM `tbl_article` WHERE `id` = '$id';";
        return $this->db->delete($query);
    }

    public function show_article_by_pagination() {
        $number_of_article_per_page = 6;
            if(!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
            $index_page = ($page-1)*$number_of_article_per_page;

            $query = "SELECT `tbl_article`.* , `tbl_image_article`.`image`
            FROM `tbl_article` JOIN `tbl_image_article` ON `tbl_article`.`id` =`tbl_image_article`.`articleId`
            ORDER BY `tbl_article`.`id` DESC
            LIMIT $index_page,$number_of_article_per_page";
        $result = $this->db->select($query);
        return $result;
    }
}