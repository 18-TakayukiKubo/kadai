<html>
<head>
<meta charset="utf-8">
<title>アンケート</title>
</head>
<body>
<?php
$name=htmlspecialchars($_POST["name"],ENT_QUOTES);
$mail=htmlspecialchars($_POST["mail"],ENT_QUOTES);
$age=htmlspecialchars($_POST["age"],ENT_QUOTES);
$sex=htmlspecialchars($_POST["sex"],ENT_QUOTES);
$hobby=htmlspecialchars($_POST["hobby"],ENT_QUOTES);
var_dump($name);
$array=array($name,$mail,$age,$sex,$hobby);

$handle=fopen('data.csv','a');

flock($handle,LOCK_EX);

fputcsv($handle,$array);

flock($handle,LOCK_UN);

fclose($handle);
?>
csvファイルを作成しました。
</body>
</html>