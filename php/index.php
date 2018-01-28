<?php
	require_once("connDB.php");
	$sql = "SELECT * FROM `members`";
	$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery-1.12.4.min.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="new.php" class="btn">新增資料</a></li>
		</ul>
	</nav>
	<div class="container">
		<table>
				<tr>
					<th>編號</th>
					<th>姓名</th>
					<th>信箱</th>
					<th>電話</th>
					<th></th>
					<th></th>
				</tr>
			<?php while($row = mysqli_fetch_assoc($result)){ ?>
				<tr>
					<td><?php echo $row["id"];?></td>
					<td><?php echo $row["username"];?></td>
					<td><?php echo $row["email"];?></td>
					<td><?php echo $row["phone"];?></td>
					<td><a href="javascript:;" data-id="<?php echo $row["id"];?>"class="del">刪除</a>
					</td>
					<td>
						<a href="detail.php?id=<?php echo $row["id"];?>">修改</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
	<script>
		$(function(){
			$(".del").click(function(){
				let el = $(this);
				let id = el.data("id");
				let data = "id="+id;
				if(confirm("確認刪除？")){
					$.ajax({
						url: "delete.php",
						type: "get",
						data: data,
						beforeSend(){
							el.parents("tr").fadeOut(function(){
								$(this).remove();
							});
						},
						success(){},
						error(){},
					});
				}
			});
		});
	</script>
</body>
</html>