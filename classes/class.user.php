<?php
require_once('inc/connection.inc');

class User{

	public $id;
	public $sid;
	public $password;

	function isValidLogin()
	{
		
		$sql="SELECT * FROM `aclc_voting_system`.`tbl_student_pass` where sid='".$this->sid."' and password='".$this->password."';";

		$result=Database::$conn->query($sql);
		if ($result->num_rows >0) {
			return true;
			# code...
		}
		else{
			return false;
		}

		
	}
}

?>