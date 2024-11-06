


<?php
    // voice_developer
    // asYL4ekPn(.l-3I3
    $dsn = 'mysql:host=localhost;dbname=voice_app;charset=utf8';
    $user = 'voice_developer';
    $pass = 'asYL4ekPn(.l-3I3';

    try {
        $dbh = new PDO($dsn,$user,$pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        // echo '接続成功';
        // SQLの準備
        $sql = 'SELECT * FROM japan';
        // SQLの実行
        $stmt = $dbh->query($sql);
        // SQLの結果を受けとる
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        $dbh = null;
    } catch(PDOException $e){
        echo '接続失敗'. $e->getMessage();
        exit();
    };
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/num_pad.css">
    <title>iU voice Navi</title>
</head>
<body>
    <main id="front">
        <p class="title">iU Voice Navi</p>
        <section id="numWindow">
            <h1 id="numBox"></h1>
        </section>

        <section id="numPad">
            <button id="1" class="numKey" data-num="1">1</button>
            <button id="2" class="numKey" data-num="2">2</button>
            <button id="3" class="numKey" data-num="3">3</button>
            <button id="4" class="numKey" data-num="4">4</button>
            <button id="5" class="numKey" data-num="5">5</button>
            <button id="6" class="numKey" data-num="6">6</button>
            <button id="7" class="numKey" data-num="7">7</button>
            <button id="8" class="numKey" data-num="8">8</button>
            <button id="9" class="numKey" data-num="9">9</button>
            <button id="*" class="numKey" data-num="*">*</button>
            <button id="0" class="numKey" data-num="0">0</button>
            <button id="#" class="numKey" data-num="#">#</button>
        </section>

        <button class="switch play"><img src="./image/play.png" alt=""></button>

        <footer>
            <p>&copy; 情報経営イノベーション専門職大学</p>
        </footer>
    </main>
<!-- ===↓audio↓=============================================== -->

<audio src="<?php ?>"></audio>

<!-- ===↓script↓======================================= -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./js/num_pad.js"></script>
</body>
</html>
