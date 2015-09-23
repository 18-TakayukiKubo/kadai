<?php
$news_id=$_GET["news_id"];
$news_title;
$news_detail;
$author;
$pdo = new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");
$sql="SELECT * FROM news, category WHERE (news_id = $news_id) AND (news.category_id = category.category_id)";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row){
//var_dump($row);
$news_title = $row["news_title"];
$news_detail = $row["news_detail"];
$author = $row["author"];
$category_name=$row["category_name"];
}
$pdo=null;
?>

<?php include("header.php"); ?>

<h1><a href="index.php">NEWS</a></h1>
<h2><?php echo $category_name ?></h2>
<h3><?php echo $news_title ?></h3>
<p><?php echo $news_detail ?></p>
<!--<p><a href="index.php">TOP</a></p>-->
<?php include("footer.php"); ?>