<?php
	include('class.student.php');
	//candidate_id, , 
	class Candidate{

		public $candidate_id;
		public $student_id;
		public $position_id;

		function loadPresidents(){
			$list_of_presidents=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position` where position='President');";

			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_presidents[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_presidents;
		}

		function loadVicePresidents(){
			$list_of_vice_presidents=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position` where position='Vice-President');";

			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_vice_presidents[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_vice_presidents;
		}

		function loadSecretaries(){
			$list_of_secretaries=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position` where position='Executive Secretary');";

			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_secretaries[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_secretaries;
		}

		function loadTreasurers(){
			$list_of_treasurers=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position` where position='Budget and Finance Officer');";

			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_treasurers[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_treasurers;
		}

		function loadAuditors(){
			$list_of_auditors=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position` where position='Internal Auditor');";

			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_auditors[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_auditors;

		}

		function loadSenators(){
			$list_of_senators=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position` where position='Senator') order by rand();";


			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_senators[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_senators;

		}

		function loadRepresentatives($yr_lvl_id){
			$list_of_representatives=array();
			$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where position_id in 
			(SELECT position_id FROM `aclc_voting_system`.`tbl_position`
				where position='Representative') having student_id in(SELECT id FROM `aclc_voting_system`.`tbl_students` 
				as st inner join tbl_stud_yrlvl as sy on `st`.`sid`=`sy`.`student_id` where `sy`.`yr_lvl_id`=".$yr_lvl_id.");";


			$result=Database::$conn->query($sql);
			if ($result->num_rows > 0) {
					while ($row=$result->fetch_array()) {
						$stud_id=$row['student_id'];
						$s4= new Student();

						$list_of_representatives[]=$s4->loadStudent($stud_id);
					}
			}
			return $list_of_representatives;
		}
	}

?>