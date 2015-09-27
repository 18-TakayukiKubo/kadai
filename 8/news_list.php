<?php
$category_id = $_GET["category_id"];
$category_name;
$news_title;
$news_detail;
$author;
//var_dump($category_id);
$pdo= new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");
$sql="SELECT * FROM news WHERE category_id = $category_id";
//var_dump($sql);
$stmt= $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $news_row){
$news_title = $news_row["news_title"];
$news_detail = $news_row["news_detail"];
    if(mb_strlen($news_detail) > 14){
        $news_summary = mb_substr($news_detail,0,14);
    }
//var_dump($news_summary);

$author = $news_row["author"];
}
$pdo = null;
?>
<?php include("header.php") ?>
<h1><a href="index.php">NEWS</a></h1>
<h2>速報</h2>
<ul>
    <li><a href="news.php"></a></li>
    <li><a href="news.php"></a></li>
    <li><a href="news.php"></a></li>
</ul>
<?php include("footer.php") ?>