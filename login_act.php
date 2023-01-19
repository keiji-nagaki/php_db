<?php
session_start();
include('functions.php');

// var_dump($_POST);
// exit();
// データ受け取り

$username =$_POST["username"];
$password =$_POST["password"];

// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM  member_registration WHERE username=:username AND password=:password AND deleted_at IS NULL';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

// ユーザ有無で条件分岐
$user = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($user);
// exit();

// 入力情報に誤りがある場合、ログイン画面に飛ぶ
if (!$user) {
  echo "<p>ログイン情報に誤りがあります</p>";
  echo "<a href=login.php>ログイン画面へ</a>";
  exit();
} 
// is_adminが１の場合は管理画面に飛ぶ
if($user["is_admin"] ===1){
  $_SESSION = array();
  $_SESSION['session_id'] = session_id();
  $_SESSION['is_admin'] = $user['is_admin'];
  $_SESSION['username'] = $user['username'];
  header("Location:login_success_manager.php");
  exit();
}
// ユーザー画面に飛ぶ
else {
  $_SESSION = array();
  $_SESSION['session_id'] = session_id();
  $_SESSION['is_admin'] = $user['is_admin'];
  $_SESSION['username'] = $user['username'];
  header("Location:login_success_users.php");
  exit();
}