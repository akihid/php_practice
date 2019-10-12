# 備忘録

- MAMPを使った動かし方例
  /Applications/MAMP/htdocs配下にフォルダ作る。
  http://localhost:8888/sample/にアクセス。



1. <?pho と ?>タグの間に書く
2.一つの命令の終わりには『;』をつける
3.外部ファイルの読み込みも可能
```
$a = 'aiueo';
$a = 'aiueo'; $b = 'aaaaa';
// htmlファイルのどこにでも外部のphpファイル読み込み可能
<?php include('sample.php'); ?>
```

# 注意点

１．一つのファイルに複数のPHPブロックが存在するとまとまったブロックになる
2．全角スペースは「' , "」で囲まなければエラーとなる
```
<?php 
  $str = 'test';
?>

<?php
  $str = 'change';
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
  <p><?php echo $str;?></p>
  <p>ここではchangeが出力される</p>
  
</body>
</html>
```



# 変数

1.変数は文字列の先頭に「$」を付ける必要がある.
2.変数の名前には英字と数字とアンダーバーが使える
3.変数の名前の先頭には数字は使えない
4.PHPの場合、動的型付け言語のため、型の宣言不要

```
<?php

  $str = '1111';
  $str___1234__aaa = 'これはおｋ';
  $1s = 'これはNG';

?>

```

# 配列

1.配列の名前は変数と同じルール。array()の中に感まで区切る
2.配列に値を入れるには[]とするか、[]の中に番号を指定する
3.配列の中身を取り出すには[]の中に番号を指定する

```
<?php

  $array = array(123, 'aiueo', 1.23 , FALSE);

  $array = array();
  $array[] = 'あいうえお'; // array[0]にセット
  $array[2] = 123;        // array[2]にセット

  echo $array[0]; //あいうえお

?>
```

# 連想配列

１，連想配列の場合「キー名 => 値」
2. 連想配列に値を入れるには[]の中にキー名を指定
3. 取り出す場合キー名、番号を指定
```
<?php

  $array = array('test' => '11111', 'hoge' => '2222', 'fuga' => '1234');

  $array['hogefuga'] = 'foo'; //キー名が存在しない場合新規作成
  $array['hogefuga'] = 'bar'; //キー名が存在する場合更新

  echo $array[0];       // 11111
  echo $array['test']   // 11111

?>
```


# 比較演算子

```

if $num == 3{}
if $num === 3 {} //　型もあっているか判定

```

# switch文
```
switch(値か変数){
  case 値:
    //命令
    break;
  case 値:
    //命令
    break;
}
```

# if文
基本的にrubyと同じ考え方。
elsifではなくelseifな点には注意
```
if ( $str === 'aaaaa'){
  echo 'aaaaa';
}elseif ($str === 'iiiii'){
  echo 'iiiii';
}else{
  echo 'else';
}
```

# while文

```
$i = 0;
while($i < 100){
  echo $i;
  $i++;
}
```


# for文
```
for ($i = 0, $i < 100, $i++){
  echo $i;
}
```


# 関数
rubyと違い『retun 値』は必要
引数の個数が違うと別の関数になるのは同じ
```
$test = 10;
echo func_test($test);

function func_test($param){
  $result = $param * 1.1
  return '変数$paramは'$.result.'です';
}
```


# 変数のスコープ
rubyと同じ感じ
関数の外で作られた変数（グローバル変数）はどこでも使える

```
$num = 20;
fuction total($val){
  echo $num   // ローカル変数$numが新規作成されるため、何も表示されない
  global $num;  // globalをつけると、グローバル変数を使うと宣言できる
  echo $num; 
  return $result = $val * 1.1;
}

echo total($num); // グローバル変数$numを関数に渡しているだけなので２２が表示
echo $num;        // グローバル変数$numをそのまま表示20