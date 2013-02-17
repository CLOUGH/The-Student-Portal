<!DOCTYPE html>
<html>
<head>
	<?php
		include_once ("../setup/config.php");
		session_start();
	?>
	<script src="../common/jQuery/jquery-1.8.2.js"></script>
	<meta charset="utf-8"/>
	<link  href="../common/stylesheet/main_stylesheet.css" rel="stylesheet" type="text/css"  />
</head>
<body>
	<div class="wrapper">


		<div class="header" >
			<nav>
				<ul>
					<li><a href="<?php echo 'http://'.$application_root.'/home'?>">Home</a></li>
					<li><a href="">Profile Management</a>
						<ul class="drop_down_list">
							<li><a href="<?php echo 'http://'.$application_root.'/profile'?>">View Student Profile</a></li>
						</ul>
					</li>
					<li><a href="" >Course Advisory</a>
						<ul class="drop_down_list" >
							<li><a href="<?php echo 'http://'.$application_root.'/view_recommended'?>">Get Recommended</a></li>
							<li><a href="">Compare Course Timetables</a></li>
						</ul>
					</li>
					<li><a href="">Register</a>
						<ul class="drop_down_list">
							<li><a href="<?php echo 'http://'.$application_root.'/register_course'?>">Register Course</a></li>
							<li><a href="">Request Override</a></li>
						</ul>
				</ul>
					</li>
			</nav>
		</div>

