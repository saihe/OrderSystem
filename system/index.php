<?php
//IDとpasswordを格納
$id   = "sake";
$pass = "sake";
$user = $_POST["userid"];
$word = $_POST["password"];

	if($user == $id && $word == $pass){
		//合っていればサイトへ
		header("Location: operation.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<form action="index.php" method="POST">
		<p>ID</p>
		<input type="text" name="userid" value="">
		<p>password</p>
		<input type="password" name="password" value="">
		<br>
		<input type="submit" name="login" value="login">
	</form>
</body>
</html>