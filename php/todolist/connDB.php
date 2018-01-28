<?php
	header("Content-Type:text/html;charset=utf-8");
	$db_host = "localhost";
	$db_user = "admin";
	$db_pw = "admin";
	$db_name ="banana";

	$conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("ERROR");
	mysqli_query($conn,"SET NAMES utf8");
?>