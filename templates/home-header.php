<?php
//登録人数の表示
$count = $db->query('SELECT COUNT(*) FROM members');
?>
<div class="header__container">
  <h1><a href="index.php" class="header-link">クルシラ</a></h1>
  <button class="header__container__hamburger" onclick="toggle()">
    <span></span>
  </button>
  <div id="hum" class="hide">
    <ul>
      <li class="welcom">登録人数:<?php echo $count->fetchColumn(); ?>人</li>
      <li><a href="index.php">ホームへ</a></li>
      <?php if(!empty($member["name"])) :?>
      <li>ようこそ<br><?php echo htmlspecialchars($member["name"], ENT_QUOTES); ?>さん</li>
      <li><a href="logout.php">ログアウト</a></li>
      <?php else: ?>
      <li><a href="login.php">ログイン</a></li>
      <?php endif; ?>
      <li><a href="about.php">このサイトについて</a></li>
      <li onclick="toggle()">Close</li>
    </ul>
  </div>
</div>
