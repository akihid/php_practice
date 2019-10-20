<?php

error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors' , 'On'); //画面にエラーを表示させる

// セッション開始
session_start();

// セッション破棄
$_SESSION = array();
session_destroy();

header("Location:login.php");  //ログイン画面へ
?>