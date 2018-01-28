<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新增事項</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="title">
			<h1>請輸入待辦事項</h1>
			<div class="spacer"></div>
		</div>
		<form action="insert.php" method="post">
			<div class="add-in">
				事項：<input type="text" name="todo">
			</div>
			<div class="add-in">
				日期：<input type="text" name="mydate">
			</div>
			<input type="submit" value="增加">
			<input type="button" value="取消" onclick="history.back()">
		</form>
	</div>
</body>
</html>