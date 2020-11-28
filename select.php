<?php
ini_set('display_errors', '1');
require('./templates/config.php');
session_start();

require('./templates/login-check.php');

$title = "車診断";
require ('./templates/layout.php');
?>
<body class="body">
  <header class="info-header">
    <?php require('templates/classic-header.php'); ?>
  </header>

  <main>
    <div class="select-main">
      <div class="select-main__container">
        <form action="result.php" class="select-main__container__box" method="POST">
          <p>スタイル</p>
          <select class="select-main__container__box__item" name="style">
            <option value="かわいい">かわいい</option>
            <option value="かっこいい">かっこいい</option>
            <option value="シンプル">シンプル</option>
            <option value="おしゃれ">おしゃれ</option>
            <option value="レトロ">レトロ</option>
          </select>
          <p>サイズ</p>
          <select class="select-main__container__box__item" name="size">
            <option value="ふつう">ふつう</option>
            <option value="すごくおおきい">すごくおおきい</option>
            <option value="おおきい">おおきい</option>
            <option value="ちいさい">ちいさい</option>
          </select>
          <p>国</p>
          <select class="select-main__container__box__item" name="country">
            <option value="国産車">国産車</option>
            <option value="外車">外車</option>
          </select>
          <p>用途</p>
          <select class="select-main__container__box__item" name="uses">
            <option value="街乗り">街乗り</option>
            <option value="アウトドア">アウトドア</option>
            <option value="スポーツ">スポーツ</option>
          </select>
          <button type="submit" class="next" value="次へ">次へ>>></button>
        </form>
      </div>
    </div>
  </main>

</body>
</html>
