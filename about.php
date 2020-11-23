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

$title = "車診断 このサイトについて";
require ('./templates/layout.php');
?>


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
