<?php
session_start();
include('functions.php');
check_session_id();


connect_to_db();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了画面 - お問合せ</title>
</head>
<body>
    <p>お問合せありがとうございます。</p>
    <a href="logout.php">logout</a>
</body>
</html>