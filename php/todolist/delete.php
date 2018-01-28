<?php
	require_once("connDB.php");
	$sql = "DELETE FROM `todolist` WHERE id=".$_GET['id'];
	mysqli_query($conn,$sql);
	header("Location:index.php");
?>