<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reply</title>
</head>
<body>
	<?php
		$user = $_GET["user"];
		$email = $_GET["email"];
		$password = $_GET["password"];

		echo "hello$user your e-mail is$email password is $password"

	?>
</body>
</html>