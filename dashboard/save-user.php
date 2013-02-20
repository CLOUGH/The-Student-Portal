<?php
	include_once("../setup/config.php");
	$user_name = $_POST["user_name"];
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$password = md5($_POST["password"]);
	$type = $_POST["type"];
	$email= $_POST["email"];

	@$db = new MySQLi($mysql_host,$mysql_username,$mysql_password,$database_name);
	if(mysqli_connect_errno())
	{
		echo "Error: Could not connect to the database.";
		exit;
	}
	$sql = "INSERT INTO `users` SET
  			`user_name`='$user_name',
  			`first_name`='$first_name',
  			`last_name`='$last_name',
  			`password`='$password',
  			`type`='$type',
  			`email`='$email',
  			`creation_date`='".date('Y-m-d H:i:s')."'
			";
	$result = $db->query($sql);
	echo "success";
?>