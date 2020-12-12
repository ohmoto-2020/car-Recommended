
<?php
ini_set('display_errors', '0');//本番環境では0
// error_reporting(E_ALL);//本番環境ではコメントアウト

try {
  // $db = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8','hogeUser', 'hogehoge');//ローカル環境

  $db = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8','root', 'wruJO8lR?=p@yOWInlPR');//AWS環境

  // $db = new PDO('mysql:dbname=heroku_91efeffca456bdc;host=us-cdbr-east-02.cleardb.com;charset=utf8','b6751ea5554297', '8e31b3b1');//ヘロク本番環境
} catch (PDOException $e) {
  echo 'DB接続エラー： ' . $e->getMessage();
}
?>
