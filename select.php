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

$title = "車診断";
require ('./templates/layout.php');
?>

  <header class="info-header">
    <?php require('templates/classic-header.php'); ?>
  </header>

  <main>
    <div class="select">
      <div class="select__container">
        <form action="result.php" class="select__container__box" method="POST">
          <p>スタイル</p>
          <select name="style">
            <option value="かわいい">かわいい</option>
            <option value="かっこいい">かっこいい</option>
            <option value="おしゃれ">おしゃれ</option>
            <option value="レトロ">レトロ</option>
          </select>
          <p>サイズ</p>
          <select name="size">
            <option value="おおきめ">おおきめ</option>
            <option value="ちいさめ">ちいさめ</option>
            <option value="ふつう">ふつう</option>
          </select>
          <p>国</p>
          <select name="country">
            <option value="国産車">国産車</option>
            <option value="外車">外車</option>
          </select>
          <button type="submit" class="next" value="次へ">次へ>>></button>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <p>Car - Recommended</p>
  </footer>
</body>
</html>
