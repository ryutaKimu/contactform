<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>お問合せ内容確認</h1>
    <div class="confirm">
       <p>お問い合せ内容はこちらで宜しいでしょうか?</p>
       <br>
       <p>よろしければ、「送信する」を押して下さい。</p>

       <p>名前
       <br>
       <?php echo $_POST['name']; ?>
       </p>

       <p>メールアドレス
       <br>
       <?php echo $_POST['mail']; ?>
       </p>

       <p>年齢
       <br>
       <?php echo $_POST['age']."歳"; ?>
       </p>

       <p>コメント
       <br>
       <?php echo $_POST['comments']; ?>
       </p>

       <div class="buttons">
        <form action="index.html" method="post">
            <input type="submit" class="button1" value="戻って修正する">
        </form>

        <form method="post" action="insert.php">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
    </div>
    </div>

</body>
</html>