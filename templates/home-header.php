
<div class="header__container">
  <h1>好きな車を見つけよう</h1>
  <button class="header__container__hamburger" onclick="toggle()">
    <span></span>
  </button>
  <div id="hum" class="hide">
    <ul>
      <li class="welcom">ようこそ<br><?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>さん</li>
      <li><a href="logout.php">ログアウト</a></li>
      <li>このサイトについて</li>
      <li onclick="toggle()">Close</li>
    </ul>
  </div>
</div>
