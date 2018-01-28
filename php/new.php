<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<title>new</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery-1.12.4.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="javascript:;" method="post">
			<div class="form-control">
				姓名：<input type="text" name="username" id="username">
			</div>
			<div class="form-control">
				信箱：<input type="text" name="email" id="email">
			</div>
			<div class="form-control">
				電話：<input type="text" name="phone" id="phone">
			</div>
			<input type="submit" value="新增">
			<input type="button" value="取消" onclick="history.back()">
		</form>
	</div>
	<script>
		$(function(){
			$("form").submit(function(){
				let Data = $("form").serialize();
				$.ajax({
					url: "add.php",
					type: "post",
					// data:{
					// 	username:$("#username").val(),
					// 	email:$("#email").val(),
					// 	phone:$("#phone").val()
					// },
					data: Data,
					// function success(){}
					// function error(){}
					success(){
						location.href="index.php";
					},
					error(){
						alert="新增失敗";
					}
				});
			});
		});
	</script>
</body>
</html>