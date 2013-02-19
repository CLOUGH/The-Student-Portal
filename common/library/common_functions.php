<?php
function isLocation($location)
{
	$current_location = $_SERVER['REQUEST_URI'];
	switch ($location){
		case "home":
				if(strpos($current_location,"/home/")>0)
					return true;
				break;
		case "course advisory":
				if(strpos($current_location,"/search-course/")>0)
					return true;
				break;
		case "dashboard";
				if(strpos($current_location,"/dashboard/")>0)
					return true;
				break;
		case "website";
				if(strpos($current_location,"/dashboard/")==0)
					return true;
				break;
	}

	return false;
}
?>