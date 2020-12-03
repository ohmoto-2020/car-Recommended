<?php
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
        <p class="about-main__container__box__subTitle">&lt;はじめに&gt;</p>
        <p class="about-main__container__box__text">このアプリは<u>12月16日</u>で使用できなくなります。車の情報元である「カーセンサー Webサービス」がサービスを終了してしまうためです。<br>ポートフォリオとして使用する予定でしたがこのような結果になってしまったので、サービス終了までにYoutube・Qiita・Githubへのアウトプットをしようと思っています。<br>
        </p>
      </div>
      <div class="about-main__container__box">
        <p class="about-main__container__box__subTitle">&lt;制作背景&gt;</p>
        <p class="about-main__container__box__text">このアプリを制作しようと思った理由は、近年の「若者の車離れ」という原因の一つに<u>「一目惚れするような車に出会えていない」</u>という問題があるからではないか、と考えたからです。<br>
        </p>
      </div>
      <div class="about-main__container__box">
        <p class="about-main__container__box__subTitle">&lt;アプリの特徴&gt;</p>
        <p class="about-main__container__box__text">このアプリは、車の「見た目・サイズ・国産もしくは外車・用途」を好きなように選んでいただけます。<br>「調べれば見つけられる」と思う方もいると思いますが、この4項目を同時に調べても、該当する車を出してくれるサイトはないと思います。<br></p>
      </div>
      <div class="about-main__container__box">
        <p class="about-main__container__box__subTitle">&lt;注意&gt;</p>
        <ul class="about-main__container__box__text">
          <li>このサイトの<u>「結果」には個人差があります</u>ので、ご了承ください。</li>
          <li>会員登録していただく意味は特にありませんが、ご利用していただいた人数をメニューに出力し、ユーザーからも把握できるため、登録していただけると嬉しいです。</li>
          <li>スマホサイズのみの対応となっていますので、PCやタブレットではうまく表示されません。</li>
          <li>「結果」に表示される車のほとんどは現行車(現在も新車で買うことができる車)です。中古車も数台表示するようにしています。</li>
          <li>「結果」に表示される価格は、新車の本体価格になっています。「(中古)」の表示がある車の価格はカーセンサーに登録してある価格を目安としています。</li>
        </ul>
      </div>
      <p>Powered by <a href="http://webservice.recruit.co.jp/">カーセンサー Webサービス</a></p>
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
