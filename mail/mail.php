<?php

if(!empty($to) && !empty($subject) && !empty($comment)){

  //　文字化け回避のお決まり
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  //　送信元定義
  $from = 'info@test.com';

  // メールを送信（送信結果はtrue/false)
  $result = mb_send_mail($to, $subject, $comment, "From: ".$from);

  if ($result) {
    // $_POSTをクリア
    unset($_POST);
    $msg = 'メール送信成功';
  } else {
    $msg = 'メール送信失敗';
  }

} else {
  $msg = '入力必須';
}

?>
