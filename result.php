<?php
require('./templates/config.php');
session_start();
require('./templates/login-check.php');


//フォーム情報
$search_style = $_POST["style"];
$search_size = $_POST["size"];
$search_country = $_POST["country"];
$search_uses = $_POST["uses"];

$sql = "SELECT * FROM cars WHERE style=:style AND size=:size AND country=:country AND uses=:uses";

// 上のSQLにフォーム情報を埋め込み
$stmh = $db->prepare($sql);
$stmh->bindValue(':style', $search_style, PDO::PARAM_STR);
$stmh->bindValue(':size', $search_size, PDO::PARAM_STR);
$stmh->bindValue(':country', $search_country, PDO::PARAM_STR);
$stmh->bindValue(':uses', $search_uses, PDO::PARAM_STR);
$stmh->execute();//SQL文実行


//API
//ベースURL
$baseurl = "http://webservice.recruit.co.jp/carsensor/usedcar/v1/";
//リクエストパラメータ
$key = '277fa2e16d8a6ebb'; // あなたのAPIキー

//該当車種分繰り返す(SQL)
while($sqlCar = $stmh->fetch(PDO::FETCH_ASSOC)){

  $brand = htmlspecialchars($sqlCar['maker']);//メーカー
  $model = htmlspecialchars($sqlCar['name']); //車種名
  $price = htmlspecialchars($sqlCar['price']); //価格
  //リクエストURLの組み立て
  $url = "$baseurl?key=$key&brand=$brand&model=$model&count=40";


  $file_name = "./cache/" . $brand . "_" . $model . ".selial";//キャッシュファイル名を作成

  // $file_name名のキャッシュファイルが存在するか否か
  if(is_file($file_name)){
    // 最終取得から10時間経っているか
    if(time() - filectime($file_name) >= 60*60*10) {
    $xmlStrings = file_get_contents($url);//リクエストURLの文字列をAPIから取ってくる
    $xml = simplexml_load_string($xmlStrings);//文字列をオブジェクト化(xml化)

    file_put_contents($file_name,$xmlStrings);//$file_name名で中身を$xmlStringsとしてキャッシュファイルを作る
    } else {
      $xmlStrings = file_get_contents($file_name);//保存されたキャッシュファイルを取ってくる
      $xml = simplexml_load_string($xmlStrings);
    }
  } else {
    $xmlStrings = file_get_contents($url);
    $xml = simplexml_load_string($xmlStrings);
    file_put_contents($file_name,$xmlStrings);
  }

  $apiCars = $xml->{'usedcar'};//取ってきたオブジェクトの車情報をとる


  $filteredCars = array();
  //該当車種の台数分繰り返す(API)
  foreach ($apiCars as $apiCar) {
    //車種名の完全一致
    if ($apiCar->{'model'} == $sqlCar['name']) {
      //一致した車を配列に入れる
      $apiCar['sqlPrice'] = $price;
      $filteredCars[] = $apiCar;
    }
  }
  $totalCars[] = array_slice($filteredCars,0,3);
}

// foreach ($totalCars as $value) {
//   var_dump($value);
// }
// var_dump($totalCars);


$title = "クルシラ 結果";
require ('./templates/layout.php');
?>
<body class="special-body">
  <header class="header">
    <?php require('templates/home-header.php'); ?>
  </header>

  <main class="result-main">
    <h2>あなたにおすすめの車は</h2>
    <?php if(isset($totalCars)): ?>
      <?php foreach ($totalCars as $outer): ?>
        <p class="car-name">車種名:<?php echo $outer[0]->{'model'} ?></p>
        <p class="maker">メーカー:<?php echo $outer[0]->{'brand'}->{'name'} ?></p>
        <p class="car-price">価格:<?php echo $outer[0]['sqlPrice']; ?>万円</p>
        <div class="slider">
        <?php foreach ($outer as $loop): ?>
          <div class="oneCar">
            <ul>
              <li><img src="<?php echo $loop->{'photo'}->{'main'}->{'l'}; ?>"></li>
            </ul>
          </div>
        <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <p class="not-find">該当する車は見つかりませんでした</p>
    <?php endif; ?>
    <a href="./select.php">
      <div class="search">RESTART</div>
    </a>
    <p class="provider">【画像提供：カーセンサー 】</p>
  </main>


  <!-- ハンバーガーのクラス変更 -->
    <script>
      function toggle(){
        if(document.getElementById('hum').className === "show") {
          document.getElementById('hum').className = "hide";
        } else {
          document.getElementById('hum').className = "show";
        }
      }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>

</body>
</html>
