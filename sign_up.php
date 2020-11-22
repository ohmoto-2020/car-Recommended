<?php
session_start();
require('./templates/config.php');

if (!empty($_POST)) {
	// エラー項目の確認
	if ($_POST['name'] == '') {
		$error['name'] = 'blank';
	}
	if ($_POST['email'] == '') {
		$error['email'] = 'blank';
	}
	if (strlen($_POST['password']) < 4) {
		$error['password'] = 'length';
	}
	if ($_POST['password'] == '') {
		$error['password'] = 'blank';
  }


	// 重複アカウントのチェック
	if (empty($error)) {
		$member = $db->prepare('SELECT COUNT(*) AS cnt FROM members WHERE	email=?');
		$member->execute(array($_POST['email']));
		$record = $member->fetch();
		if ($record['cnt'] > 0) {
			$error['email'] = 'duplicate';
		}
	}

  // エラーがないのでセッションに入力されたものを保存
    if(empty($error)){
    $_SESSION['join'] = $_POST;

    if (!empty($_POST)) {
    // 登録処理をする
      $statement = $db->prepare('INSERT INTO members SET name=?, email=?,	password=?, created=NOW()');
      echo $ret = $statement->execute(array(
        $_SESSION['join']['name'],
        $_SESSION['join']['email'],
        sha1($_SESSION['join']['password'])
      ));
      unset($_SESSION['join']);

      header('Location: index.php');
      exit();
    }
  }
}

$title = "車診断 新規会員登録ページ";
require ('./templates/layout.php');
?>

  <header class="info-header">
    <?php require('templates/classic-header.php'); ?>
  </header>

  <main class="info-main">
    <div class="info-main__container">
      <h2 class="info-main__container__title">新規会員登録</h2>
      <form action="sign_up.php" method="post" class="info-main__container__form">
        <ul>
          <li>
            <label for="name" class="user-info">ニックネーム:</label>
            <input type="name" class="user-info" name="name" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES); ?>">
          </li>
          <?php if ($error['name'] == 'blank'): ?>
          <p class="error">ニックネームを入力してください</p>
          <?php endif; ?>
          <li>
            <label for="email" class="user-info">メールアドレス:</label>
            <input type="email" class="user-info" name="email"  value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>">
          </li>
          <?php if ($error['email'] == 'blank'): ?>
          <p class="error">メールアドレスを入力してください</p>
          <?php endif; ?>
          <?php if ($error['email'] == 'duplicate'): ?>
          <p class="error">指定されたメールアドレスはすでに登録されています</p>
          <?php endif; ?>
          <li>
            <label for="password" class="user-info">パスワード:</label>
            <input type="password" class="user-info" name="password"  value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES); ?>">
          </li>
          <?php if ($error['password'] == 'blank'): ?>
          <p class="error">パスワードを入力してください</p>
          <?php endif; ?>
          <?php if ($error['password'] == 'length'): ?>
          <p class="error">パスワードは4文字以上で入力してください</p>
          <?php endif; ?>
        </ul>
        <button type="submit" class="info-main__container__form__button">登録する</button>
      </form>
    </div>
  </main>

  <footer>
    <p>Car - Recommended</p>
  </footer>
</body>
</html>
