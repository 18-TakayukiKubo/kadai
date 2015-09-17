<?php
session_start();
//エラーメッセージ
$errorMessage = "";
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
var_dump($pdo);
?>
<html>
<head>
</head>
<body>
<h1>ログイン</h1>
<form action="login_execute.php" method="post">
	ログイン名: <input type="text" name="username" value="" />
	パスワード: <input type="password" name="password" value="" />
	<input type="submit" value="ログイン"/>
</form>

</body>
</html>