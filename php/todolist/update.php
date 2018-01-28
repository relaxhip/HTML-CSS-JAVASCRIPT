<?php
	require_once("connDB.php");
	$id = $_POST["id"];
	$todo = $_POST["todo"];
	$mydate = $_POST["mydate"];
	$sql = "UPDATE `todolist` SET mydate='$mydate',todo='$todo'WHERE id=$id";
	mysqli_query($conn,$sql);	
	header("Location:index.php");
?>