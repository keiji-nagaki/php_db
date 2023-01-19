<?php
// var_dump($_POST);
// exit();


include('functions.php');

// registerが存在しないor空の場合エラーの表示
if (
  !isset($_POST['company']) || $_POST['company'] === '' ||
  !isset($_POST['affiliation']) || $_POST['affiliation'] === '' ||
  !isset($_POST['address']) || $_POST['address'] === '' ||
  !isset($_POST['username']) || $_POST['username'] === '' ||
  !isset($_POST['tel']) || $_POST['tel'] === '' ||
  !isset($_POST['mail']) || $_POST['mail'] === '' ||
  !isset($_POST['password']) || $_POST['password'] === ''
) {
  exit('未入力があります。');
 
}

// 変数にする
$company = $_POST["company"];
$affiliation = $_POST["affiliation"];
$address = $_POST["address"];
$username = $_POST["username"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$password = $_POST["password"];

// var_dump( $_POST["affiliation"]);
// exit();

// データベースに接続
$pdo = connect_to_db();


$sql = 'SELECT COUNT(*) FROM member_registration WHERE username=:username';

// バインド変数に変換
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


if ($stmt->fetchColumn() > 0) {
  echo '<p>すでに登録されているユーザです．</p>';
  echo '<a href="login.php">login</a>';
  exit();
}

// データベースへ登録
$sql = 'INSERT INTO member_registration(id, company, affiliation, address, username, tel, mail, password, is_admin, updated_at, created_at, deleted_at) 
VALUES(NULL, :company, :affiliation, :address, :username, :tel, :mail, :password, 0, now(), now(), NULL)';

// バインド変数に変換
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':affiliation', $affiliation, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


header("Location:login.php");
exit();
