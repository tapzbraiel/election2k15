<?php


require_once('inc/connection.inc');

class YearLevel{
	public $id;
	public $yr_lvl;

	function getMyYearLevelId($usn){
		$sql="SELECT * FROM `aclc_voting_system`.`tbl_stud_yrlvl` where student_id='".$usn."';";
		$result=Database::$conn->query($sql);
		$row=$result->fetch_array();
		return $row['yr_lvl_id'];
	}
}

?>