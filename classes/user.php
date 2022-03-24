<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helper/format.php');

/**
 * 
 */
class user
{
	private $db;
	private $fm;
	
	public function __construct()
	{
		// tạo ra 1 instance là có thể dùng các function viết sẵn của class Database và Format rồi
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function show_customers(){
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result; 
        // return "abd";
    }



}
?>
