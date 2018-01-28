<?php
	require_once("connDB.php");
	$id = $_GET["id"];
	$sql = "DELETE FROM `members` WHERE id=$id";
	mysqli_query($conn,$sql);
	header("Location:index.php");
?>