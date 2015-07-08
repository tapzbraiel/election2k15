<?php


include('../classes/class.user.php');

	$u=new User();
	$u->username='1200555200';
	$u->password='XCM200200';

	if($u->isValidLogin()){
		echo "valid login";
	}
	else{
		echo "invalid login";
	}


	

?>