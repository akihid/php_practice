<?php

  error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
  ini_set('display_errors' , 'On'); //画面にエラーを表示させる

  session_start();

  // ログインしていなければlogin画面に戻す
  if(empty($_SESSION['login'])) header("Location:login.php");

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>mypage</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php if(!empty($_SESSION['login'])){ ?>
      <h1>マイページ</h1>
      <section>
        <p>
          あなたのemailは<?php echo $_SESSION['email'] ?>です<br/>
          あなたのpassは <?php echo $_SESSION['pass'] ?>です。
        </p>
      </section>
      <a href="logout.php">ログアウト</a>
    <?php }else{ ?>
      <p>ログイン必須</p>
    <?php } ?>

  </body>
</html>