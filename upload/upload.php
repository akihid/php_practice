<?php

if(!empty($file)){
  // var_dump($file);

  // バリデーションチェック
  $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
  var_dump($file['size']);
  if ($ext == 'jpg' || $ext == 'png') {
    if ($file['size'] > 100000) {
      $msg = 'ファイルサイズエラー(100KB以下のみアップ可能)';
    }
  } else {
    $msg = 'jpg,pngのみアップロード可能';
  }
  var_dump($msg);
  // チェックOKのときのみ
  if(empty($msg)){

  // サーバーに画像を保存
  $upload_path = 'images/'.$file['name'];
  $result = move_uploaded_file($file['tmp_name'], $upload_path);

  if ($result) {
    $msg = '画像アップ完了.ファイル名：'.$file['name'];
    // 表示陽画像パスの変数へ画像パスを入れる
    $img_path = $upload_path; 
  }else{
    $msg = '画像アップ失敗.エラー内容：'.$file['error'];
  }
  }
} else{
  $msg = '画像を選択してください';
}
?>
