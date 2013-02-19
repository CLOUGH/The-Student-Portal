<?php
include_once("../setup/config.php");
session_start();
session_destroy();
header("Location:http://$application_root/index.php");
?>