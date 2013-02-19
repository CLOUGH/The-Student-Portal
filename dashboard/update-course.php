<?php
	include_once("../setup/config.php");
	$id = $_POST["id"];
	$title = $_POST["title"];
	$subject = $_POST["subject"];
	$code = $_POST["code"];
	$simester = $_POST["simester"];
	$faculty= $_POST["faculty"];
	$level = $_POST["level"];
	$credit= $_POST["credit"];
	$type = $_POST["type"];
	$description = $_POST["description"];

	@$db = new MySQLi($mysql_host,$mysql_username,$mysql_password,$database_name);
	if(mysqli_connect_errno())
	{
		echo "Error: Could not connect to the database.";
		exit;
	}
	$sql = "UPDATE `courses` SET
  			`title`='$title',
  			`subject`='$subject',
  			`code`='$code',
  			`simester`='$simester',
  			`faculty`='$faculty',
  			`level`='$level',
  			`credit`='$credit',
  			`type`='$type',
  			`description`='$description'
			 WHERE courses.id = $id";

	$result = $db->query($sql);
	echo "success";
?>