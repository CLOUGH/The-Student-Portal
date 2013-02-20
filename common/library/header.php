<!DOCTYPE html>
<html>
<head>
	<?php

		require_once("../common/library/user.php");
		require_once("../common/library/common_functions.php");
		session_start();
		if(isset($_SESSION['user_id']))
			$user =new User($_SESSION['user_id']);
		else
			header("Location:http://".$application_root."/login/logout.php");

	?>
	<script src="../common/jQuery/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="../common/jquery/jquery.backstretch.min.js"></script>
	<link href="../common/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="../common/bootstrap/js/bootstrap.js"></script>
    <link href="../common/stylesheet/bootstrap-overides.css" rel="stylesheet">
    <link href="../common/stylesheet/stylesheet.css" rel="stylesheet">
    <script src="../common/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('.dropdown-toggle').dropdown();
			$(".collapse").collapse();
			$.backstretch("../common/images/blurred-images.jpg");
			var admin_nav_active = "website";
			$("#admin-logout-icon").hover(function(){
				$(this).attr("class","icon-off icon-white");
			},function(){
				$(this).attr("class","icon-off");
			});

		});

	</script>
</head>
<body>
	<?php
		 if($user->getType()=="1"): //admin ?>
		 	<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<div class="nav-collapse pull-right">

							<ul class="nav">
								<li class="<?php echo isLocation('website')?'active':''; ?>">
									<a role="button" href="<?php echo '../home'?>">Website</a>
								</li>
								<li class="<?php echo isLocation('dashboard')?'active':''; ?>">
									<a role="button" href="<?php echo '../dashboard'?>">Dashboard</a>
								</li>
								<li>
									<a href="<?php echo '../login/logout.php'?>">
									<i id="admin-logout-icon" class="icon-off"></i>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<style>#main-container{margin-top: 45px;}</style>
		<?php endif;?>

	<div class="container" id="main-container">
		<?php if(!isLocation("dashboard")):?>
		<h3 >The Student Portal</h3>
		<nav class="navbar">
		<div class="navbar-inner" id="main-navbar">
			<div class="container">
				<div class="nav-collapse pull-right">

					<ul class="nav">
						<li class="<?php echo isLocation('home')?'active':''; ?>" >
							<a role="button" href="<?php echo '../home'?>">Home</a>
						</li>
						<li class="dropdown <?php echo isLocation('proflie management')?'active':''; ?>">
							<a class="dropdown-toggle" data-toggle="dropdown"  role="button" href="#">Profile Management</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="<?php echo '../profile'?>">View Student Profile</a></li>
							</ul>
						</li>
						<li class="dropdown <?php echo isLocation('course advisory')?'active':''; ?>">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Course Advisory</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" >
								<li><a tabindex="-1" href="<?php echo '../search-course'?>">Search Course</a></li>
								<li><a tabindex="-1" href="">Compare Course Timetables</a></li>
							</ul>
						</li>
						<li class="dropdown <?php echo isLocation('register')?'active':''; ?>">
							<a  class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Register</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="<?php echo '../register_course'?>">Register Course</a></li>
								<li><a tabindex="-1" href="">Request Override</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav" id="user-nav">
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">
								<span class="profile-icon-container"><i class="icon-user"></i></span><?php echo $user->getFirstName(); ?>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="#">Messages</a></li>
								<li><a id="logout-link" tabindex="-1" href="<?php echo '../login/logout.php'?>">
									Logout
									<i class="icon-off"></i>
								</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>

	</nav>



