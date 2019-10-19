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
- header("Location:mypage.php"); ※header関数でLocation: URL指定でリダイレクト。こいつを動かす前後に何らかの出力をすると正しくリダイレクトしない場合がある（echo)
- 本来はサニタイズ、メールの重複チェック


# define(定数の定義)
```
define('定数名', '値');
```


# MAMPメモ
- MAMP開く→スタートページ→ツール（phpadmin）開く
- データベース作成→テーブル作成
- usersテーブル作成(id, email, pass, login_time)
- デフォルトではuser,passwordはroot
```
$dsn = 'DB種類:dbname=DBの名前;host=ホスト名;charset=文字コード';
$user = 'root';
$password = 'root';
```
- $options内は使い回しでおK
- PDOはphpからDBに接続するために使用するオブジェクト（PHP Data Object）
- prepareメソッドを使用し、ユーザーの入力情報をSQLに反映
- queryメソッドを利用して、SQL文を実行する場合はユーザからの入力をSQL文に含めることが出来ません
- prepareメソッドを利用して、SQL文を実行する場合はユーザからの入力をSQL文に含める事が出来ます。
```
// ユーザからの入力情報を含むSQL文の作成
$sql = 'Insert into テーブル名(カラム名) values(:変数)'　;
// ユーザの入力情報をSQL文に含める準備
$statement = $database->prepare($sql);
// SQL文にユーザからの入力情報を代入
$statement->bindParam(':変数', $_POST['hoge']);
// ユーザからの入力情報を含んだSQLを実行
$statement->execute();
```