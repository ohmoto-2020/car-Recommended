
<?php
ini_set('display_errors', 1);

try {
  $db = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8','hogeUser', 'hogehoge');
  // $db = new PDO('mysql:dbname=heroku_91efeffca456bdc;host=us-cdbr-east-02.cleardb.com;charset=utf8','b6751ea5554297', '8e31b3b1');
} catch (PDOException $e) {
  echo 'DB接続エラー： ' . $e->getMessage();
}
?>
