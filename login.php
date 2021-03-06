<?php
require('./templates/config.php');
session_start();

if (isset($_COOKIE['email']) && !empty($_COOKIE['email'])) {
  $_POST['email'] = $_COOKIE['email'];
  $_POST['password'] = $_COOKIE['password'];
}

// $error=array();
if (!empty($_POST)) {
  // ログインの処理
  if ($_POST['email'] != '' && $_POST['password'] != '') {
    $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=?');
    $login->execute(array(
      $_POST['email'],
      sha1($_POST['password'])
    ));
    $member = $login->fetch();
    if ($member) {
      // ログイン成功
      $_SESSION['id'] = $member['id'];
      $_SESSION['time'] = time();

      // ログイン情報を記録する
      setcookie('email', $_POST['email'], time()+60*60*24*14);
      setcookie('password', $_POST['password'], time()+60*60*24*14);

      header('Location: index.php');
      exit();
    } else {
      $error['login'] = 'failed';
    }
  } else {
    $error['login'] = 'blank';
  }
}

$title = "クルシラ ログインページ";
require ('./templates/layout.php');
?>
<body class="body">
  <header class="info-header">
    <?php require('templates/classic-header.php'); ?>
  </header>

  <main class="info-main">
    <div class="info-main__container">
      <h2 class="info-main__container__title">ログイン</h2>
      <div class="info-main__container__subTitle">
        <p>登録がまだの方はこちらからどうぞ。</p>
        <p>&raquo;<a href="sign_up.php">新規登録をする</a></p>
      </div>
      <form action="login.php" method="post" class="info-main__container__form">
        <ul>
          <li>
            <label for="email" class="user-info">メールアドレス</label>
            <input type="email" class="user-info" name="email" value="
            <?php print !empty($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES):''; ?>">
          </li>
          <li>
            <label for="password" class="user-info">パスワード</label>
            <input type="password" class="user-info" name="password" value="<?php print !empty($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES):''; ?>">
          </li>
        </ul>
        <?php if (isset($error['login']) && $error['login'] ==  'blank'): ?>
          <p class="error">メールアドレスとパスワードを<br>ご記入ください</p>
        <?php endif; ?>
        <?php if (isset($error['login']) && $error['login'] == 'failed'): ?>
          <p class="error">ログインに失敗しました。正しくご記入ください。</p>
        <?php endif; ?>
        <button type="submit" class="info-main__container__form__button">ログイン</button>
      </form>
    </div>
  </main>
</body>
</html>
