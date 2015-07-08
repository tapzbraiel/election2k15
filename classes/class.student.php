<?php
	 require('inc/connection.inc');

	class Student
	{
		public $id;
		public $sid;
		public $fname;
		public $mname;
		public $lname;
		
		function loadStudent($sid)
		{
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_students` where id=". $sid. ";";
			$result=Database::$conn->query($sql);
			if($result->num_rows > 0)
			{
				while ($row=$result->fetch_array()) {

						$this->id=$row['id'];
						$this->sid=$row['sid'];
						$this->fname=$row['fname'];
						$this->mname=$row['mname'];
						$this->lname=$row['lname'];
				}
			}
			return $this;
		}
	}

?>