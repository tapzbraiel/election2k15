<?php
include('../classes/class.user.php');

session_start();
$usn = $_POST['usn'];
$password = $_POST['password'];

$u= new User();
$u->sid=$usn;
$u->password=$password;

if ($u->isValidLogin()) {
	if (isset($_SESSION['HAS_ERROR'])) {
		unset($_SESSION['HAS_ERROR']);
	}
		$_SESSION['usn']=$usn;
	
		header('location:http://localhost/election2k15/public/voting-page.php');

	}
else{

	$_SESSION['HAS_ERROR']=1;
	header('location:http://localhost/election2k15/public');
}



?>