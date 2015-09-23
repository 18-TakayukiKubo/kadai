<?php 
//newsに表示用の変数を定義
$view ="";
//DB接続
$pdo = new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");
//create_dateの降順に3件取得
//日付の取得をMySQLの関数DATE_FORMATで整形
//categoryテーブルを作りそこからカテゴリー情報を取得
$sql="SELECT news.news_id, category.category_name, news.news_title, DATE_FORMAT(news.create_date, '%Y.%m.%d') AS create_date FROM news,category WHERE news.category_id = category.category_id ORDER BY news.create_date DESC LIMIT 3";
//var_dump($sql);
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);
$pdo=null;

foreach($results as $row){
    //var_dump($row);
    $title = $row["news_title"];
    $title = mb_substr($title,0,20,"utf-8");
    $title = '<a href="news.php?news_id=' . $row["news_id"] . '">' . $title . '</a>';
    $view .= '<dt>' . $row["create_date"] . '</dt>';
    $view .= '<dd>' . $title . '</dd>';
    $view .= '<dd>' . $row["category_name"] . '</dd>';
}

?>

<?php include("header.php"); ?>
<h1>NEWS</h1>
<h2>テクノロジー</h2>
<ul>
<dl>
    <?php echo $view ?>
</dl>
<li><p><a href="news_list.php">もっと見る</a></p></li>
</ul>
<h2>経済</h2>
<ul>
<li><p><a href="news.php">ニュース1</a></p></li>
<li><p><a href="news.php">ニュース2</a></p></li>
<li><p><a href="news.php">ニュース3</a></p></li>
<li><p><a href="news_list.php">もっと見る</a></p></li>
</ul>
<h2>政治</h2>
<ul>
<li><p><a href="news.php">ニュース1</a></p></li>
<li><p><a href="news.php">ニュース2</a></p></li>
<li><p><a href="news.php">ニュース3</a></p></li>
<li><p><a href="news_list.php">もっと見る</a></p></li>
</ul>
<h2>速報</h2>
<ul>
<li><p><a href="news.php">ニュース1</a></p></li>
<li><p><a href="news.php">ニュース2</a></p></li>
<li><p><a href="news.php">ニュース3</a></p></li>
<li><p><a href="news_list.php">もっと見る</a></p></li>
</ul>
<?php include("footer.php"); ?>