<?php

if(!empty($file)){
  // var_dump($file);
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
} else{
  $msg = '画像を選択してください';
}
?>
