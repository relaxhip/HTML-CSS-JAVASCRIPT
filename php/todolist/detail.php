<?php
	require_once("connDB.php");
	$sql = "SELECT * FROM `todolist` WHERE id=".$_GET["id"];
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container clearfix">
		<div class="title">
			<h1>請輸入欲更改項目</h1>
			<div class="spacer"></div>
		</div>
		<form action="update.php" method="post">
			<div class="add-in">
				事項：<input type="text" name="todo" value="<?php echo $row["todo"];?>">
			</div>
			<div class="add-in">
				日期：<input type="text" name="mydate" value="<?php echo $row["mydate"];?>">
			</div>
			<input type="hidden" name="id" value="<?php echo $row["id"];?>">
			<input type="submit" value="確認修改">
			<input type="button" value="取消" onclick="location.href='index.php'">
		</form>
	</div>
	
</body>
</html>