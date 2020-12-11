<?php
require('./templates/config.php');
session_start();
require('./templates/login-check.php');

$title = "クルシラ トップページ";
require ('./templates/layout.php');
?>
<body class="body">
  <header class="header">
    <?php require('templates/home-header.php'); ?>
  </header>

  <main class="index-main">
    <div class="index-main__trouble">
      <p class="index-main__trouble__title">好きな車を見つけよう</p>
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
