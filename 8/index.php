<?php 
//newsに表示用の変数を定義
//データベースから取得したカテゴリーと名前を格納する変数
$category_lists =array();

//カテゴリー毎にhtml表示する変数
$category_news_block = "";

//カテゴリーテーブルかｒカテゴリー一覧を、取り敢えずカテゴリーIDの小さい順から取得
$pdo = new PDO("mysql:host=localhost;dbname=news_app;charset=utf8", "root", "");
$sql="SELECT * FROM category ORDER BY category_id";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$category_lists=$stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($category_lists);
//各カテゴリー毎に、for文でブロックを作る
foreach($category_lists as $category_row){
    //var_dump($category_row);
    $news_list = array();
    $category_id = $category_row["category_id"];
    $category_name = $category_row["category_name"];
    $category_news_block .= '<h2><a href ="news_list.php?category_id=' . $category_row["category_id"].'">'.$category_name.'</a></h2>';
//カテゴリー毎に、ニューステーブルから3件ずつニュースを取得するSQLを発行する
    $sql = "SELECT * FROM news WHERE category_id = :category_id ORDER BY create_date DESC LIMIT 3";
    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(":category_id",$category_id, PDO::PARAM_INT);
$stmt ->execute();
$news_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($news_list);

$category_news_block .= "<ul>";
foreach($news_list as $news){
//各ニュースのタイトルを表示する
    $news_title = $news["news_title"];
    $category_news_block .= '<li><a  href = "news.php?news_id=' . $news["news_id"].'">' . $news_title . '</li>';
}
$category_news_block .= "</ul>";
}
$pdo = null;
?>

<?php include("header.php"); ?>

<!--PHPはここで出力開始-->
<?php echo $category_news_block ?>
<!--PHPはここで出力終了-->


<!--<h1>NEWS</h1>
<h2>テクノロジー</h2>
<ul>
<dl>
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
</ul>-->
<?php include("footer.php"); ?>