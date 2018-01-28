<?php
	require_once("connDB.php");
	$todo = $_POST["todo"];
	$mydate = $_POST["mydate"];
	$sql = "INSERT INTO `todolist`(mydate,todo)VALUES('$mydate','$todo')";
	mysqli_query($conn,$sql);
	header("Location:index.php");
?>