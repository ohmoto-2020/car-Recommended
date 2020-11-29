<?php
ini_set('display_errors', '1');
require('./templates/config.php');
session_start();

require('./templates/login-check.php');

$title = "このサイトについて";
require ('./templates/layout.php');
?>

<body class="body">
  <header class="header">
    <?php require('templates/home-header.php'); ?>
  </header>

  <main class="about-main">
    <div class="about-main__container">
      <p class="about-main__container__title">このサイトについて</p>
      <div class="about-main__container__caution">
        <p class="about-main__container__caution__subTitle">注意</p>
        <p class="about-main__container__caution__text">このサイトの「結果」には個人差があります。<br>なるべく世界全ての車種を表示できるよう尽力いたしました。</p>
      </div>
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
