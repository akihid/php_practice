<?php

if(!empty($to) && !empty($subject) && !empty($comment)){

  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $from = 'info@test.com';

  $result = mb_send_mail($to, $subject, $comment, "From: ".$from);

  if ($result) {
    unset($_POST);
    $msg = 'メール送信成功';
  } else {
    $msg = 'メール送信失敗';
  }

} else {
  $msg = '入力必須';
}

?>
