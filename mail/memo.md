# include
- 別ファイルの読み込み可能
- <?php include(‘ファイルのパス’); ?> or <?php require(‘ファイルのパス’); ?>


# mb_send_mail
- https://www.php.net/manual/ja/function.mb-send-mail.php
```
mb_send_mail ( string $to , string $subject , string $message [, mixed $additional_headers = NULL [, string $additional_parameter = NULL ]] ) : bool
```
# unset
- https://www.php.net/manual/ja/function.unset.phps
- unset() は指定した変数を破棄します。
- 関数 unset() の内部動作は、 破棄しようとする変数の型に依存します。