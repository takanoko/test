<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    
    <body>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
            </ul>
        </header>
        
        <main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>

            
        <form method="post" action="insert.php">
            <div class="a">入力フォーム</div>
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="40" name="handlename">
            </div>
            
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="40" name="title">
            </div>
            
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="70" rows="7" name="comments"></textarea>
            </div>
            
            <div>
            <button type="submit">投稿する</button>
</div>
        </form>
            
            <?php
            
            mb_internal_encoding("utf8");
            $pdo=new PDO("mysql:dbname=php_lesson;host=localhost;","root","mysql");
            $stmt=$pdo->query("select*from 4each_keijiban");
            ?>
            
            <div class="c">
            <?php
            
            while($row=$stmt->fetch()){
            
            echo"<div class='kiji'>";
            echo"<h3>".$row['title']."</h3>";
            echo"<div class='contents'>";
            echo $row['comments'];
            echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo"</div>";
            echo"</div>";
            
            }
            ?>
            </div>
            
            </div>
            
            <div class="right">
            <h2>人気の記事</h2>
            <p>PHP オススメ本</p>
            <p>PHP MyAdminの使い方</p>
            <p>今人気のエディタ TOP5</p>
            <p>HTMLの基礎</p>
            
            <h2>オススメリンク</h2>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Bracketsのダウンロード</p>
            
            <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
            </div>
        </main>
    
          <footer>
        copyright © internous | 4each blog is the one which provides A to Z about programming.</footer>
    
    </body>
</html>