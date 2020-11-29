<?php
ini_set('display_errors', '1');
require('./templates/config.php');
session_start();

require('./templates/login-check.php');

$title = "このサイトについて";
require ('./templates/layout.php');
?>

<body class="special-body">
  <header class="header">
    <?php require('templates/home-header.php'); ?>
  </header>

  <main class="about-main">
    <div class="about-main__container">
      <p class="about-main__container__title">このサイトについて</p>
      <div class="about-main__container__box">
        <p class="about-main__container__box__subTitle">&lt;制作背景&gt;</p>
        <p class="about-main__container__box__text">このアプリを制作しようと思った理由は、近年の「若者の車離れ」という原因の一つに<strong>「一目惚れするような車に出会えていない」</strong>という問題があるからではないか、と考えたからです。<br>
        </p>
      </div>
      <div class="about-main__container__box">
        <p class="about-main__container__box__subTitle">&lt;アプリの特徴&gt;</p>
        <p class="about-main__container__box__text">このアプリは、車の「見た目・サイズ・国産もしくは外車・用途」を好きなように選んでいただけます。<br>「調べれば見つけられる」と思う方もいると思いますが、この4項目を同時に調べても、該当する車を出してくれるサイトはないと思います。<br></p>
      </div>
      <div class="about-main__container__box">
        <p class="about-main__container__box__subTitle">&lt;注意&gt;</p>
        <ul>
          <li>このサイトの「結果」には個人差がありますので、<br>ご了承ください。</li>
          <li>会員登録していただく意味は特にありません。<br>ですが、ご利用していただいた人数をメニューに出力し、ユーザーからも把握できるため、登録していただけると嬉しいです。</li>
          <li></li>
        </ul>
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
