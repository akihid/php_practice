<?php

error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors' , 'on'); //画面にエラーを表示させる

// ファイルが送信された場合
if(!empty($_FILES)){

  // フォームから送られたファイルを受信
  $file = $_FILES['image'];

  $msg = '';
  $img_path = '';

  include('upload.php');
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
    <h1>画像アップロード</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="送信">
    </form>

    <?php if(!empty($img_path)){ ?>
      <div class="img_area">
        <p>アップロロード画像</p>
        <img src="<?php echo $img_path; ?>" >
      </div>
    <?php } ?>
  </body>
</html>