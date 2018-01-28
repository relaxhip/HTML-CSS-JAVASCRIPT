<?php
	require_once("connDB.php");
	$id = $_POST["id"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$sql = "UPDATE `members` SET username='$username',email='$email',phone='$phone' WHERE id=$id";
	mysqli_query($conn,$sql);
	// header("Location:index.php");
?>