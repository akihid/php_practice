<?php

error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors' , 'On'); //画面にエラーを表示させる

// POST送信チェック
if(!empty($_POST)){

  $to = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];

  $msg = '';

  include('mail.php');
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p><?php if(!empty($msg)) echo $msg; ?></p>
    <h1>CONTACT</h1>
    <form action="" method="post">
      <input type="text" name="email" placeholder="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email']; ?>">
      <input type="text" name="subject" placeholder="件名" value="<?php if(!empty($_POST['subject'])) echo $_POST['subject']; ?>">
      <input type="textarea" name="comment" placeholder="内容" value="<?php if(!empty($_POST['comment'])) echo $_POST['comment']; ?>">

      <input type="submit" value="送信">
    </form>
  </body>
</html>