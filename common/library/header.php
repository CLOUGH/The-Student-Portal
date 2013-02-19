<!DOCTYPE html>
<html>
<head>
	<?php
		include_once ("../setup/config.php");
		session_start();
	?>
	<script src="../common/jQuery/jquery-1.8.2.js"></script>
	<link href="../common/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="../common/bootstrap/js/bootstrap.js"></script>
    <link href="../common/stylesheet/bootstrap-overides.css" rel="stylesheet">
    <link href="../common/stylesheet/stylesheet.css" rel="stylesheet">
    <script src="../common/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('.dropdown-toggle').dropdown()

		});
	</script>
</head>
<body>


	<div class="container">
		<h3 >The Student Portal</h3>
		<nav class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<div class="nav-collapse pull-right">

					<ul class="nav nav-pills">
						<li class="active">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="<?php echo 'http://'.$application_root.'/home'?>">Home</a>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown"  role="button" href="#">Profile Management</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="<?php echo 'http://'.$application_root.'/profile'?>">View Student Profile</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Course Advisory</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" >
								<li><a tabindex="-1" href="<?php echo 'http://'.$application_root.'/view_recommended'?>">Get Recommended</a></li>
								<li><a tabindex="-1" href="">Compare Course Timetables</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a  class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Register</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="<?php echo 'http://'.$application_root.'/register_course'?>">Register Course</a></li>
								<li><a tabindex="-1" href="">Request Override</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav" id="user-nav">
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">
								<span class="profile-icon-container"><i class="icon-user"></i></span>Warren
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="#">Messages</a></li>
								<li><a tabindex="-1" href="<?php echo 'http://'.$application_root.'/login/logout.php'?>">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</nav>



