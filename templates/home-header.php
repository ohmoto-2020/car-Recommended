<?php
//登録人数の表示
$count = $db->query('SELECT COUNT(*) FROM members');
?>
<div class="header__container">
  <h1>好きな車を見つけよう</h1>
  <button class="header__container__hamburger" onclick="toggle()">
    <span></span>
  </button>
  <div id="hum" class="hide">
    <ul>
      <li class="welcom">登録人数:<?php echo $count->fetchColumn(); ?>人</li>
      <li>ようこそ<br><?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>さん</li>
      <li><a href="index.php">ホームへ</a></li>
      <li><a href="logout.php">ログアウト</a></li>
      <li><a href="about.php">このサイトについて</a></li>
      <li onclick="toggle()">Close</li>
    </ul>
  </div>
</div>
