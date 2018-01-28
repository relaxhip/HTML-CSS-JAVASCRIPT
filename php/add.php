<?php
	require_once("connDB.php");
	$username = $_POST["username"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$sql = "INSERT INTO `members`(username,email,phone)VALUES('$username','$email','$phone')";
	mysqli_query($conn,$sql);
	// header("Location:index.php");
	// header("Refresh:2;url=index.php");  //跳轉
?>