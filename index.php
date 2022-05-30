<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
    mb_internal_encoding("utf8"); 
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root",""); 
    $stmt = $pdo->query("select * from 4each_keijiban");
?>

<header>
        <img src="4eachblog_logo.jpg">
        <div class="head">
            <ul>
            <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>

    <main>
        <div class="main_left">
            <h1>プログラミングに役立つ掲示板</h1>
            <br>
            <div class="form">
                <h2>入力フォーム</h2>
                <form method="post" action="insert.php">
                    <div class="handlename">
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div class="title">
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div class="comments">
                        <label>コメント</label>
                        <br>
                        <textarea cols="50" rows="7" name="comments"></textarea>
                    </div>

                    <div class="bottom">
                        <input type="submit" class="submit" value="送信する">
                    </div>
                </form>
            </div>

            <?php
                while ($row=$stmt->fetch()) {
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }
            ?>
        
        </div>
                

        <div class="main_right">
            <div class="popular">
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
            </div>

            <div class="recommend">
                <h2>おすすめリンク</h2>
                <ul>
                    <li>インターノース株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード Top5</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            </div>

            <div class="categoly">
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>           
        </div>
    </main>

    <footer>
        copyright © internous │ 4each blog the whitch provide A to Z about programming.
    </footer>

</body>

</body>