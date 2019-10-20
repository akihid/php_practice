<?php

error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors' , 'On'); //画面にエラーを表示させる

// POST送信チェック
if(!empty($_POST)){

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  //DBへの接続準備
  $dsn = 'mysql:dbname=php_sample01;host=localhost;charset=utf8';
  $user = 'root';
  $password = 'root';
  $options = array(
    //SQL実行失敗時に例外スロー
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // デフォルトフェッチモードを連想配列形式に設定
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //バッファークエリを使う（一度に結果セットをすべて取得し、サーバー負荷を軽減
    //SELECTで得た結果に対してもrouCountメソッドを使えるようにする
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
  );
  // PODオブジェクト生成（DBへ接続)
  $dbn = new PDO($dsn, $user, $password, $options);

  //SQL文（クエリー作成)
  $stmt = $dbn->prepare('SELECT *  FROM users WHERE email = :email AND pass = :pass');

  //プレースホルダに値をセットし、SQL実行
  $stmt->execute(array(':email' => $email, ':pass' => $pass));

  $result = 0;

  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  //結果が０でない場合
  if(!empty($result)){

    //SESSIONを使うためにsession_start()を呼び出す
    session_start();

    $_SESSION['login'] = true;
    $_SESSION['pass'] = $pass;
    $_SESSION['email'] = $email;

    header("Location:mypage.php");  //マイページへ
  }
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
    <h1>ログイン</h1>
    <form action="" method="post">
      <input type="text" name="email" placeholder="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email']; ?>">
      <input type="password" name="pass" placeholder="パスワード" value="<?php if(!empty($_POST['pass'])) echo $_POST['pass']; ?>">
      <input type="submit" value="送信">
    </form>
    <a href="mypage.php">マイページへ</a>
  </body>
</html>