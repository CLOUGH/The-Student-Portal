<?php
session_start();
include_once("setup/config.php");

if(!isset($_SESSION["user_id"]))
	header("location:login");
else
	header("location:home");
?>