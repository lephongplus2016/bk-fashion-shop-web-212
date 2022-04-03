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

        $query = "INSERT INTO `tbl_article`(`title`, `content`, `writer`) VALUES ('$title', '$content', '$author');";
        return $this->db->insert($query);
    }

    public function show_article()
    {
        $query = "SELECT `id`, `title`, `writer`, `datetime` FROM `tbl_article` ORDER BY id DESC;";
        return $this->db->select($query);
    }

    public function getArticleById($id)
    {
        $query = "SELECT * FROM `tbl_article` WHERE id = '$id';";
        return $this->db->select($query);
    }

    public function update_article($data, $file, $id)
    {
        $title = mysqli_real_escape_string($this->db->link, $data['articleTitle']);
        $author = mysqli_real_escape_string($this->db->link, $data['author']);
        $content = mysqli_real_escape_string($this->db->link, $data['contents']);

        $query = "UPDATE `tbl_article` SET
        `title` = '$title',
        `content` = '$content',
        `writer` = '$author'
        WHERE `id` = '$id';";
        return $this->db->update($query);
    }

    public function delete_article($id)
    {
        $query = "DELETE FROM `tbl_article` WHERE `id` = '$id';";
        return $this->db->delete($query);
    }
}