<?php
require_once('inc/connection.inc');

class Partylist 
{
	public $party_id;
	public $partyname;
	public $description;

	function loadPartyName($stud_id){
		$sql="SELECT * FROM `aclc_voting_system`.`tbl_candidates` where student_id=".$stud_id.";";
		$result=Database::$conn->query($sql);
		$row=$result->fetch_array();
		$can_id=$row['candidate_id'];

		$sql="SELECT * FROM `aclc_voting_system`.`tbl_party` where 
		party_id in(SELECT party_id FROM `aclc_voting_system`.`tbl_candidate_party` where candidate_id=".$can_id.");";
		$result=Database::$conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_array()) {
				$this->party_id=$row['party_id'];
				$this->partyname=$row['partyname'];
				$this->description=$row['description'];
			}
		}
	}
}

?>