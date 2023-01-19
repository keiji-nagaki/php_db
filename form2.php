<?php
session_start();
include('functions.php');
check_session_id();



if(isset($_SESSION["name"])){
    
    $name = $_SESSION["name"];
    $company_name = $_SESSION["company_name"];
    $subject = $_SESSION["subject"];
    $body = $_SESSION["body"];
    
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    // exit();
}

// $_SESSION["token"] = bese64_encode(openssl_random_pseudo_bytes(48));

// $token = thmlspecialchars($_SESSION["token"],ENT_QUOTES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面 - お問合せ</title>
</head>
<body>
    <form action="form3.php" method ="POST">
        <input type="hidden" name="token" value="<?php echo $token ?>">
<table>
    <tr>
        <th>お名前</th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th>会社名</th>
        <td><?php echo $company_name; ?></td>
    </tr>
    <tr>
        <th>お問合せの種類</th>
        <td><?php echo $subject; ?></td>
    </tr>
    <tr>
        <th>お問合せ内容</th>
        <td><?php echo nl2br($body); ?></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name ="submit" value ="送信する"></td>
    </tr>
</table>
    </form>

    <p><a href="form1.php?action=edit">入力画面へ</a></p>
</body>
</html>