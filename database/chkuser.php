<?php
session_start();
require "dataconnect.php";

    $user = $_POST['user'];
	$pswd = $_POST['pswd'];	

	$search_data = "select *from login where username = '$user' and password = '$pswd'";

	$search_result = $con->query($search_data);
	
	if($search_result->num_rows > 0)
	{
		while($user = $search_result->fetch_assoc()) {
			$_SESSION['username'] = $user['username'];
			$_SESSION['uid'] = $user['uid'];
		}

		// $_SESSION['username'] = $user['username'];
		// $_SESSION['uid'] = $user['uid'];

		$update_data = "update login set active='active' where uid='" . $_SESSION['uid'] . "'";
		$con->query($update_data);	

		
		echo "true";
	}
	else
	{
		echo 'User name does not exist';
	}	

		
		
?>