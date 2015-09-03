<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="comfirm_enq.php" method="POST">
	名前:
	<br>
	<input type="text" name="name" />
	<br><br>
	メールアドレス:
	<br>
	<input type="text" name="mail" />
	<br><br>
	年齢:
	<br>
	<input type="text" name="age"/>
	<br><br>
	性別:
    <br>
    <input type="radio" name="sex" value="男"/>男
    <input type="radio" name="sex" value="女"/>女
    <br><br>
    趣味:
    <br>
    <input type="checkbox" name="hobby" value="読書">読書
    <input type="checkbox" name="hobby" value="映画鑑賞">映画鑑賞
    <input type="checkbox" name="hobby" value="ランニング">ランニング
    <input type="checkbox" name="hobby" value="プログラミング">プログラミング
    <input type="checkbox" name="hobby" value="釣り">釣り
    <br><br>
	<input type="submit" />
</form>
</body>
</html>