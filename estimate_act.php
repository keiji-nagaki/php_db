<?php
session_start();
include('functions.php');
check_session_id();
// var_dump($_POST);

// exit();

// registerが存在しないor空の場合エラーの表示
if (
  !isset($_POST['request_type']) || $_POST['request_type'] === '' ||
  !isset($_POST['plant_name']) || $_POST['plant_name'] === '' ||
  !isset($_POST['valve_number']) || $_POST['valve_number'] === '' ||
  !isset($_POST['valve_name']) || $_POST['valve_name'] === '' ||
  !isset($_POST['valve_jo']) || $_POST['valve_jo'] === '' ||
  !isset($_POST['valve_pat']) || $_POST['valve_pat'] === '' ||
  !isset($_POST['valve_size']) || $_POST['valve_size'] === '' ||
  !isset($_POST['body']) || $_POST['body'] === '' ||
  !isset($_POST['deadline']) || $_POST['deadline'] === ''
) {
  exit('未入力があります。');
 
}

// 変数にする
$request_type = $_POST["request_type"];
$plant_name = $_POST["plant_name"];
$valve_number = $_POST["valve_number"];
$valve_name = $_POST["valve_name"];
$valve_jo = $_POST["valve_jo"];
$valve_pat = $_POST["valve_pat"];
$valve_size = $_POST["valve_size"];
$body = $_POST["body"];
$deadline = $_POST["deadline"];


// var_dump($body);
// exit();

// データベースに接続
$pdo = connect_to_db();

$sql = 'INSERT INTO estimate(id, request_type, plant_name, valve_number, valve_name, valve_jo, valve_pat, valve_size, body, deadline, updated_at)
              VALUES(NULL, :request_type, :plant_name, :valve_number, :valve_name, :valve_jo, :valve_pat, :valve_size, :body, :deadline, now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':request_type', $request_type, PDO::PARAM_STR);
$stmt->bindValue(':plant_name', $plant_name, PDO::PARAM_STR);
$stmt->bindValue(':valve_number', $valve_number, PDO::PARAM_STR);
$stmt->bindValue(':valve_name', $valve_name, PDO::PARAM_STR);
$stmt->bindValue(':valve_jo', $valve_jo, PDO::PARAM_STR);
$stmt->bindValue(':valve_pat', $valve_pat, PDO::PARAM_STR);
$stmt->bindValue(':valve_size', $valve_size, PDO::PARAM_STR);
$stmt->bindValue(':body', $body, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);



// バインド変数に変換
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':request_type', $request_type, PDO::PARAM_STR);
$stmt->bindValue(':plant_name', $plant_name, PDO::PARAM_STR);
$stmt->bindValue(':valve_number', $valve_number, PDO::PARAM_STR);
$stmt->bindValue(':valve_name', $valve_name, PDO::PARAM_STR);
$stmt->bindValue(':valve_jo', $valve_jo, PDO::PARAM_STR);
$stmt->bindValue(':valve_pat', $valve_pat, PDO::PARAM_STR);
$stmt->bindValue(':valve_size', $valve_size, PDO::PARAM_STR);
$stmt->bindValue(':body', $body, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:form3.php");
exit();


