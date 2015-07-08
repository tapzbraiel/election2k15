<?php

	require('class.database.inc');
	
	//instantiation
	$db=new Database();
	$db->server='localhost';
	$db->user='root';
	$db->pw='';
	$db->db='aclc_voting_system';
	$db->connect();
	




?>