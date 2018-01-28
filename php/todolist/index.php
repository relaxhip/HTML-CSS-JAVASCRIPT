<?php
	require_once("connDB.php");
	$sql = "SELECT * FROM `todolist`";
	$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>todolist</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container clearfix">
		<div class="title">
			<h1>ToDoList</h1>
			<div class="spacer"></div>
		</div>
			<table>
				<tr>
					<th>事項</th>
					<th>日期</th>
					<th></th>
					<th></th>
				</tr>
			<?php while($row = mysqli_fetch_assoc($result)){?>
				<tr>
					<td><?php echo $row["todo"];?></td>
					<td><?php echo $row["mydate"];?></td>
					<td>
						<a href="delete.php?id=<?php echo $row["id"];?>" onclick="return confirm('確定事項已完成？')"">完成</a>
					</td>
					<td>
						<a href="detail.php?id=<?php echo $row["id"];?>">事項變更</a>
					</td>
				</tr>
			<?php } ?>
		</table>
		<nav>
			<ul>
				<li><a href="new.php" class="btn">新增事項</a></li>
			</ul>
		</nav>
	</div>
</body>
</html>