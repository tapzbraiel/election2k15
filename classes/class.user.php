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

	function isAlreadyvoted($usn){
		$sql = "SELECT * FROM `tbl_students` where sid='".$usn."'";
		$result = Database::$conn->query($sql);
		if ($result->num_rows >0) {
			$row = $result->fetch_array();
			$id = $row['id'];
			$sql = "SELECT * FROM tbl_student_votes where student_id =" .$id;
			$result=Database::$conn->query($sql);
			if ($result->num_rows >0) {
				return true;
			}
			else
			{
				return false;
			}
			
		}

	}
}

?>