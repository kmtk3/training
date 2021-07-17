<?php
     $db = new PDO("mysql:host=localhost:8889;dbname=php_learning", "root", "root");

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<title>掲示板</title>
<h1>掲示板</h1>
<section>
    <h2>新規投稿</h2>
    <form action="finish.php" method="post">
        名前: <input type="text" name="author" value=""><br>
        本文: <input type="text" name="content" value=""><br>
        <button type="submit">投稿</button>
    </form>
</section>
<section>
    <h2>投稿一覧</h2>
    <?php
     $n = $db -> query("SELECT * FROM board02 ORDER BY id DESC");
     ?>
    <ul>
        <?php while ($i = $n -> fetch()):?>

        <li style="list-style: none;"><?=htmlspecialchars($i['id']);?>
            <?=htmlspecialchars($i['content']);?>
            (<?=htmlspecialchars($i['author']);?>)
            <?=htmlspecialchars($i['time']);?>
        </li>
        <?php endwhile; ?>
    </ul>
</section>