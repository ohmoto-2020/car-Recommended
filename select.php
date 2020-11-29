<?php
ini_set('display_errors', '1');
require('./templates/config.php');
session_start();

require('./templates/login-check.php');

$title = "クルシラ";
require ('./templates/layout.php');
?>
<body class="body">
  <header class="info-header">
    <?php require('templates/classic-header.php'); ?>
  </header>

  <main>
    <div class="select-main">
      <form action="result.php" class="select-main__container" method="POST">
        <div class="select-main__container__box">
          <div class="select-main__container__box__item">
            <p class="select-main__container__box__item__title">スタイル</p>
            <select class="select-main__container__box__item__select" name="style">
              <option value="かわいい">かわいい</option>
              <option value="かっこいい">かっこいい</option>
              <option value="シンプル">シンプル</option>
              <option value="おしゃれ">おしゃれ</option>
              <option value="レトロ">レトロ</option>
            </select>
          </div>
          <div class="select-main__container__box__item">
          	<p class="select-main__container__box__item__title">サイズ</p>
          	<select class="select-main__container__box__item__select" name="size">
          	  <option value="ふつう">ふつう</option>
          	  <option value="すごくおおきい">すごくおおきい</option>
          	  <option value="おおきい">おおきい</option>
          	  <option value="ちいさい">ちいさい</option>
          	</select>
          </div>
          <div class="select-main__container__box__item">
          	<p  class="select-main__container__box__item__title">国</p>
          	<select class="select-main__container__box__item__select" name="country">
          	  <option value="国産車">国産車</option>
          	  <option value="外車">外車</option>
          	</select>
          </div>
          <div class="select-main__container__box__item">
            <p  class="select-main__container__box__item__title">用途</p>
            <select class="select-main__container__box__item__select" name="uses">
              <option value="街乗り">街乗り</option>
              <option value="アウトドア">アウトドア</option>
              <option value="スポーツ">スポーツ</option>
            </select>
          </div>
        </div>
        <button type="submit" class="select-main__container__next" value="次へ">NEXT</button>
      </form>
    </div>
  </main>

</body>
</html>
