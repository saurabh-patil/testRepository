<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="online_shopping";
	mysql_connect($server,$user,$password) or die("Not Connected");
	mysql_select_db($database) or die("Not Selected");
?>