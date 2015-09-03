<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
アンケート内容の確認
<br><br>
名前:
<br>
<?php
$name=$_POST["name"];
echo $name;
?>
<br><br>
メールアドレス:
<br>
<?php
$mail=$_POST["mail"];
echo $mail;
?>
<br><br>
年齢:
<br>
<?php
$age=$_POST["age"];
echo $age;
?>
<br><br>
性別:
<br>
<?php
$sex=$_POST["sex"];
echo $sex;
?>
<br><br>
趣味:
<br>
<?php
$hobby = $_POST["hobby"];
echo $hobby;
?>
<br><br>
<form action="show_enq.php" method="POST">
    <input type="hidden" name="name" value="<$php echo $name; ?>">
    <input type="hidden" name="mail" value="<$php echo $mail; ?>">
    <input type="hidden" name="age" value="<$php echo $age; ?>">
    <input type="hidden" name="sex" value="<$php echo $sex; ?>">
    <input type="hidden" name="hobby" value="<$php echo $hobby; ?>">
    <input type="submit" value="送信">
</form>
</body>
</html>