<?php
require_once ("../setup/config.php");
define('MYSQL_HOST', $mysql_host);
define ('MYSQL_USERNAME',$mysql_username);
define('MYSQL_PASSWORD',$mysql_password);
define('DATABASE_NAME', $database_name);
class Course
{
	private $id;
	private $title;
	private $code;
	private $subject;
	private $credit;
	private $faculty;
	private $simester;
	private $level;
	private $type;
	private $description;
	public function Course()
	{

	}
	public function initByID($id)
	{
		$db = new MySQLi(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, DATABASE_NAME);
		$sql="SELECT c.id, c.title, c.code, c.subject, c.credit, c.type,
					c.faculty, c.simester, c.level, c.type, c.description
			FROM courses c WHERE c.id='$id'";

		$result=$db->query($sql);
		$row = $result->fetch_assoc();

		$this->id =$row['id'];
		$this->title=$row['title'];
		$this->code=$row['code'];
		$this->subject=$row['subject'];
		$this->faculty=$row['faculty'];
		$this->type=$row['type'];
		$this->simester=$row['simester'];
		$this->level=$row['level'];
		$this->description=$row['description'];
		$this->credit=$row['credit'];

		$result->free();
		$db->close();
	}
	public static function getAllCourseIds()
	{
		$db = new MySQLi(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, DATABASE_NAME);
		$sql="SELECT c.id	FROM courses c";

		$result= $db->query($sql);
		$ids=array();

		for($i=0;$i<$result->num_rows;$i++)
		{
			$row = $result->fetch_assoc();
			$ids[$i]=$row['id'];
		}
		return $ids;
	}
	/*-------------------------------------------------------------------------------
		Getters
	---------------------------------------------------------------------------------*/
	public function getDescription()
	{
		return $this->description;
	}
	public function getID()
	{
		return $this->id;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getCode()
	{
		return $this->code;
	}
	public function getSubject()
	{
		return $this->subject;
	}
	public function getCredit()
	{
		return $this->credit;
	}
	public function getFaculty()
	{
		return $this->faculty;
	}
	public function getSimester()
	{
		return $this->simester;
	}
	public function getLevel()
	{
		return $this->level;
	}
}
?>