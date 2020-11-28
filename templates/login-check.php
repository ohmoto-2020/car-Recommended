<?php

if(isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
  //ログインしている
  $_SESSION['time'] = time();

  $members = $db->prepare('SELECT * FROM members WHERE id=?');
  $members->execute(array($_SESSION['id']));
  $member = $members->fetch();
}
// } else {
//   //ログインしてない
//   header('Location: login.php');
//   exit();
// }

?>
