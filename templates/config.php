
<?php
ini_set('display_errors', 1);

try {
  $db = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8','hogeUser', 'hogehoge');
} catch (PDOException $e) {
  echo 'DB接続エラー： ' . $e->getMessage();
}
?>
