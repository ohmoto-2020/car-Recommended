
<div class="header__container">
  <h1>あなたにオススメの1台を探すサイト</h1>
  <button class="header__container__hamburger" onclick="toggle()">
    <span></span>
  </button>
  <ul>
    <li>ようこそ<br><?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>さん</li>
    <li><a href="logout.php">ログアウト</a></li>
  </ul>
</div>
