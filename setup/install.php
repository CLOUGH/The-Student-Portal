<?php
	//MySQL Root Login Information
	$mysql_username = $_POST['mysql_username'];
	$mysql_host = $_POST['mysql_host'];
	$mysql_password =$_POST['mysql_password'];

	//Admin login information (new user)
	$admin_username = $_POST['admin_username'];
	$admin_password = md5($_POST['admin_password']);
	$admin_email = $_POST['admin_email'];
	$admin_fname = $_POST['admin_fname'];
	$admin_lname =$_POST['admin_lname'];
	@$db = new MySQLi($mysql_host,$mysql_username,$mysql_password);
	if(mysqli_connect_errno())
	{
		echo "Error: Could not connect to the database.";
		exit;
	}

	$sql = "CREATE DATABASE student_portal";
	$result = $db->query($sql);

	$sql ="USE student_portal";
	$result = $db->query($sql);

	//create scapholding for the website

	$file = @fopen(dirname(__FILE__)."\database.sql", "r");
	if ($file) {
		while (!feof($file)) {
	    	$sql.= fgets($file, 4096);
		    if (substr(rtrim($sql), -1)== ';') {

				$db->query($sql);
				$sql = '';
		    }
		}
	fclose($file);
	}
	else
	{
		echo "Could not find the 'database.sql' located in setup folder";
		exit;
	}

	$sql = "SELECT users.user_name FROM users WHERE users.user_name = '$admin_username'";
	$result= $db->query($sql);
	if($result->num_rows>0)
	{
		echo "Username already exist.";
		exit;
	}

	$sql = "INSERT INTO `users` SET
  			`user_name`='$admin_username',
		  	`password`='$admin_password',
		  	`first_name`='$admin_fname',
		  	`last_name`='$admin_lname',
		  	`email`='$admin_email',
		  	`type`='1',
		  	`creation_date`='".date('Y-m-d H:i:s')."'
			";
	$result = $db->query($sql);

	$sql = "SELECT users.id FROM users WHERE users.user_name='$admin_username'";
	echo $sql;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
	$sql = "INSERT INTO `admins` SET
  			`user_id`=".$row['id'].",
		  	`creation_date`='".date('Y-m-d H:i:s')."'
			";
	$result = $db->query($sql);


	$file = fopen("config.php", "w");
	if(!$file)
	{
		echo "Error while creating file config";
		exit;
	}
	fwrite($file, "<?php \n");
	fwrite($file, "\$mysql_username= '$mysql_username';\n");
	fwrite($file, "\$mysql_password= '$mysql_password';\n");
	fwrite($file, "\$mysql_host = '$mysql_host';\n");
	fwrite($file, "\$database_name = 'student_portal';\n");
	fwrite($file,"\$application_root = '$_SERVER[HTTP_HOST]".
		substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"/setup"))."'; \n");
	fwrite($file, "?> \n");
	fclose($file);

	echo "success";
?>