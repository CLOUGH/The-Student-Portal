<?php
include_once("../setup/config.php");
session_start();
unset($_SESSION['error_message']);
unset($_SESSION['user_id']);


	$user_name=$_POST['user_name'];
	$password=md5($_POST['password']);

	// Connect to server and select databse.
	$db = new MySQLi($mysql_host, $mysql_username, $mysql_password,$database_name);
	$sql="SELECT users.id
		FROM users WHERE users.user_name='$user_name' and users.password='$password'";

	$result=$db->query($sql);
	$count=$result->num_rows;
	if($count==1)
	{
		$selected_user =  $result->fetch_assoc();
		$_SESSION['user_id'] = $selected_user['id'];
		header("Location:http://$application_root/index.php");
		exit;
	}
	else {

		$_SESSION["error_message"]= "The password or username entered is invalid.";
		echo $_SESSION['error_message'];
		header("Location:http://$application_root/login");
		exit;
	}


?>