<?php
try {
  $db = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8','hogeUser', 'hogehoge');
  // $db = new PDO('mysql:dbname=heroku_91efeffca456bdc;host=us-cdbr-east-02.cleardb.com;charset=utf8','b6751ea5554297', '8e31b3b1');

  $sql = "SELECT * FROM cars";

  // 上のSQLにフォーム情報を埋め込み
  $stmh = $db->prepare($sql);
  $stmh->execute();//SQL文実行


  //API
  //ベースURL
$baseurl = "http://webservice.recruit.co.jp/carsensor/usedcar/v1/";
//リクエストパラメータ
$key = '277fa2e16d8a6ebb'; // あなたのAPIキー

while($sqlCar = $stmh->fetch(PDO::FETCH_ASSOC)){
  $brand = htmlspecialchars($sqlCar['maker']);//メーカー
  $model = htmlspecialchars($sqlCar['name']); //車種名

  //リクエストURLの組み立て
  $url = "$baseurl?key=$key&brand=$brand&model=$model&count=40";


  $file_name = "./cache/" . $brand . "_" . $model . ".selial";//キャッシュファイル名を作成


  $xmlStrings = file_get_contents($url);//リクエストURLの文字列をAPIから取ってくる
  $xml = simplexml_load_string($xmlStrings);//文字列をオブジェクト化(xml化)

  file_put_contents($file_name,$xmlStrings);//$file_name名で中身を$xmlStringsとしてキャッシュファイルを作る

}
} catch (PDOException $e) {
  echo 'DB接続エラー： ' . $e->getMessage();
}
?>
