<?php
require_once ("../setup/config.php");
define('MYSQL_HOST', $mysql_host);
define ('MYSQL_USERNAME',$mysql_username);
define('MYSQL_PASSWORD',$mysql_password);
define('DATABASE_NAME', $database_name);
	class User
	{
		private $id;
		private $username;
		private $first_name;
		private $last_name;
		private $middle_name;
		private $date_of_birth;
		private $email;
		private $type;

		public function User($id)
		{
			$db = new MySQLi(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, DATABASE_NAME);
			$sql="SELECT u.id, u.user_name, u.first_name, u.last_name, u.email, u.type
				FROM users  u WHERE u.id='$id'";

			$result=$db->query($sql);
			$row = $result->fetch_assoc();

			$this->id =$row['id'];
			$this->username=$row['user_name'];
			$this->first_name=$row['first_name'];
			$this->last_name=$row['last_name'];
			$this->email=$row['email'];
			$this->type=$row['type'];
		}

		public function getID()
		{
			return $this->id;
		}
		public function getUsername()
		{
			return $this->username;
		}
		public function getFirstName()
		{
			return $this->first_name;
		}
		public function getLastName()
		{
			return $this->last_name;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getType()
		{
			return $this->type;
		}
	}
?>