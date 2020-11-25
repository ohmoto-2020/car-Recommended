<?php
ini_set('display_errors', '1');
require('./templates/config.php');
session_start();

if(isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
  //ログインしている
  $_SESSION['time'] = time();

  $members = $db->prepare('SELECT * FROM members WHERE id=?');
  $members->execute(array($_SESSION['id']));
  $member = $members->fetch();
} else {
  //ログインしてない
  header('Location: login.php');
  exit();
}

$title = "車診断 トップページ";
require ('./templates/layout.php');
?>
<body class="body">
  <header class="header">
    <?php require('templates/home-header.php'); ?>
  </header>

  <main class="index-main">
    <div class="index-main__trouble">
      <p class="index-main__trouble__title">車に一目惚れしよう</p>
      <p class="index-main__trouble__explanation">この世にある車全てを<br>把握できている人はどのくらいいるでしょうか。<br>まだあなたはトキメク車に出会っていないかもしれません。</p>
      <p class="index-main__trouble__contents">どんな車があるの？<br>車が欲しいけど調べ方がわからない...<br>特徴だけで探したい！</p>
    </div>
    <div class="index-main__search">
      <p class="index-main__search__induction">&#9661;下をクリック&#9661;</p>
      <a href="select.php" class="index-main__search__button">START</a>
    </div>
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
</body>
</html>
