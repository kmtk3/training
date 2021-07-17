
<!DOCTYPE html>
<meta charset="UTF-8">
<title>掲示板</title>
<h1>掲示板</h1>
<section>
<?php
 if (!empty($_POST["author"]) && !empty($_POST["content"])) {
     $author = htmlspecialchars($_POST["author"], ENT_QUOTES);
     $content = htmlspecialchars($_POST["content"], ENT_QUOTES);
     
     $db = new PDO("mysql:host=localhost:8889;dbname=php_learning", "root", "root");
     
     $db->query("INSERT INTO board02 (id,author,content,time)
             VALUES (NULL,'$author','$content',NOW())");

     print "<h1>コメント送信完了しました</h1>";
     print "<p><a href=index.php>掲示板へ戻る</a></p>";
 } else {
     print "<h1>※フォームが入力されていません</h1>";
     print "<p><a href=index.php>掲示板へ戻る</a></p>";
 }

?>

</section>