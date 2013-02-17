<?php
session_start();
include_once("setup/config.php");

if(!isset($_SESSION["user_id"]))
	header("location:http://$application_root/login");
else
	header("location:http://$application_root/home");
?>