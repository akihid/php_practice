# $_POSTについて

- $_POST は PHPの定義済み変数(=スーパーグローバル変数)の1つ
- $POST は HTTP POST メソッド で送信された値を取得する変数
- $_POST は 連想配列として使用する
- $_POST は、関数やメソッドの内部で使用する場合、global $_POST; とする必要がない


PHPのお決まり？
```
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors' , 'On'); //画面にエラーを表示させる
```

# メモ
- form action=""で自分自身にPOST通信する。actionは書かなくてもOK。
- 最初にページ開いたときはGET通信だからPHP内の『if(!empty($_POST)){}』は処理されない。
- 『if(!empty($err_msg["email"]))』もerr_msgを定義していないため処理されない。
- $_POST['formのname属性']をキーにして値を取得できる
- preg_match("正規表現", 対象)
- header("Location:mypage.php"); ※header関数でLocation: URL指定でリダイレクト。こいつを動かす前後に何らかの出力をすると正しくリダイレクトしない場合がある


# define(定数の定義)
```
define('定数名', '値');
```


# MAMPメモ
- MAMP開く→スタートページ→ツール（phpadmin）開く
- データベース作成→テーブル作成
- usersテーブル作成(id, email, pass, login_time)
