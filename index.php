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

  <header class="header">
    <?php require('templates/home-header.php'); ?>
  </header>

  <main class="index-main">
    <div class="index-main__trouble">
      <p class="index-main__trouble__top">どんな車があるの？<br>車が欲しいけど調べ方がわからない...<br>特徴だけで探したい！</p>
      <p class="index-main__trouble__bottom">あなたの条件に合った車を紹介します！</p>
    </div>
    <a href="select.php" class="index-main__search">START!</a>
  </main>

  <footer>
    <p>Car - Recommended</p>
  </footer>
</body>
</html>
