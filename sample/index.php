<?php
  $str = 'htmlにはこれが表示される';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>PHPのテスト</p>
  <p><?php echo $str;?></p>
  
</body>
</html>