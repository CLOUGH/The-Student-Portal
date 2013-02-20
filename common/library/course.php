<?php
require_once ("../setup/config.php");
if(!defined('MYSQL_HOST'))
	define('MYSQL_HOST', $mysql_host);
if(!defined('MYSQL_USERNAME'))
	define ('MYSQL_USERNAME',$mysql_username);
if(!defined('MYSQL_PASSWORD'))
	define('MYSQL_PASSWORD',$mysql_password);
if(!defined('DATABASE_NAME'))
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
	public static function courseSearch($title, $code, $subject,$credit_max, $credit_min,
								$faculty, $degree_name, $simester, $level)
	{
		$db = new MySQLi(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, DATABASE_NAME);
		$sql="SELECT c.id FROM courses c WHERE ";

		if(trim($title)!="")
			$sql .= " c.title LIKE '%$title%' AND";
		if(trim($code)!="")
			$sql .= " c.code LIKE '%$code%' AND";
		if(trim($subject)!="")
			$sql .=" c.subject LIKE '%$subject%' AND";
		if(trim($faculty)=="ALL")
			$sql .=" c.faculty LIKE '%%' AND";
		else if(trim($faculty)!="ALL")
			$sql .= " c.faculty LIKE '%$faculty%' AND";
		$sql= substr($sql,0,strrpos($sql, 'AND',-1));
		$sql.=" GROUP BY c.code";

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
	public function getType()
	{
		return $this->type;
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