<?php
include_once("../setup/config.php");
session_start();
unset($_SESSION['error_message']);
unset($_SESSION['user_id']);
header("Location:../index.php");
?>