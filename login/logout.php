<?php
include_once("../setup/config.php");
session_start();
session_destroy();
header("Location:../index.php");
?>