<?php
	require_once("connDB.php");
	$id = $_GET["id"];
	$sql = "SELECT * FROM `members` WHERE id=$id";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail</title>
	<script src="js/jquery-1.12.4.min.js"></script>
</head>
<body>
		<div class="container">
		<form action="javascript:;" method="post">
			<div class="form-control">
				姓名<input type="text" name="username" value="<?php echo $row["username"];?>">
			</div>
			<div class="form-control">
				Mail<input type="text" name="email" value="<?php echo $row["email"];?>">
			</div>
			<div class="form-control">
				電話<input type="text" name="phone" value="<?php echo $row["phone"];?>">
			</div>
			<input type="hidden" name="id" value="<?php echo $row["id"];?>">
			<input type="submit" value="修改">
			<input type="button" value="取消" onclick="history.back()"> <!--onclick="location.href='index.php'"-->
		</form>
	</div>
	<script>
		$(function(){
			$("form").submit(function(){
				let Data = $("form").serialize();
				$.ajax({
					url: "update.php",
					type: "post",
					data: Data,
					success(){
						location.href="index.php";
					},
					error(){
						alert="修改失敗"
					},
				});
			});
		});
	</script>
</body>
</html>