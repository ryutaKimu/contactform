<?php

mb_internal_encoding("utf8");

try {
  $pdo = new PDO("mysql:dbname=lesson1; host=localhost", "root", "root");

  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $age = $_POST['age']; 
  $comments = $_POST['comments'];

  $stmt = $pdo->prepare("insert into contactform(name, mail, age, comments) values (:name, :mail, :age, :comments)");

  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
  $stmt->bindValue(':age', $age, PDO::PARAM_INT);
  $stmt->bindValue(':comments', $comments, PDO::PARAM_STR);

  $stmt->execute();

} catch(PDOException $e) {
  echo "エラー: " . $e->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>お問い合わせフォームを作る</title>
</head>
<body>
    <h1>お問合せフォーム</h1>
    <div class="confirm">
        <p>
            お問合せありがとうございました。<br>3営業日以内に担当者からご連絡差し上げます。
        </p>
    </div>
</body>
</html>