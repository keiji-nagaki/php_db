<?php
session_start();
include('functions.php');
check_session_id();

// if(isset($_SESSION["name"])){
//     echo "<pre>";
//     var_dump($_SESSION);
//     echo "</pre>"; 
// }

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// エラー表示の配列
$errors = array();

// 確認画面へのボタンが押した場合、POSTの配列を変数にする
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $company_name = $_POST["company_name"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

// セキュリティ
    $name = htmlspecialchars($name, ENT_QUOTES);
    $company_name = htmlspecialchars($company_name, ENT_QUOTES);
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $body = htmlspecialchars($body, ENT_QUOTES);

// 変数が空の場合、エラーの配列に文字列
    if($name === ""){
        $errors["name"] = "お名前が入力されていません。";
    }
    if($company_name === ""){
        $errors["company_name"] = "会社名が入力されていません。";
    }
    if($body === ""){
        $errors["body"] = "お問合せ内容が入力されていません。";
    }

    if(count($errors) === 0){
     $_SESSION["name"] = $name;
     $_SESSION["company_name"] = $company_name;
     $_SESSION["subject"] = $subject;
     $_SESSION["body"] = $body;

     header("location:form2.php");
     exit();
    }
}

// echo "<pre>";
// var_dump($errors);
// echo "</pre>";

if(isset($_GET["action"]) && $_GET["action"] === "edit"){
$name = $_SESSION["name"];
$company_name = $_SESSION["company_name"];
$subject = $_SESSION["subject"];
$body = $_SESSION["body"];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せ</title>
</head>
<body>
<!-- エラーを表示 -->
<?php
echo "<ul>";
foreach($errors as $value){
    echo "<li>";
    echo "$value";
    echo "</li>";
}
echo "<ul>";


?>

<form action="form1.php" method ="POST">
<table>
<tr>
    <th>お名前</th>
    <!-- 入力内容が保持される value  -->
    <td><input type="text" name ="name" value ="<?php if(isset($name)){echo $name;} ?>"></td>
</tr>
<tr>
    <th>会社名</th>
    <td><input type="text" name ="company_name" value ="<?php if(isset($company_name)){echo $company_name;} ?>"></td>
</tr>
<tr>
    <th>お問合せの種類</th>
    <td><select name="subject" id="" >
        <option value="メンテナンスに関するお問合せ"
         <?php
          if(isset($subject) && $subject ==="メンテナンスに関するお問合せ"){
            echo "selected";
           }
           ?>
           >メンテナンスに関するお問合せ</option>
        <option value="バルブ購入・更新のお問合せ"
         <?php
        if(isset($subject) && $subject ==="バルブ購入・更新のお問合せ"){
            echo "selected";
           }
           ?>>バルブ購入・更新のお問合せ</option>
           <option value="他社製品からの更新のお問合せ"
         <?php
        if(isset($subject) && $subject ==="他社製品からの更新のお問合せ"){
            echo "selected";
           }
           ?>>他社製品からの更新のお問合せ</option>
    </select></td>
</tr>
<tr>
    <th>お問合せ内容</th>
    <td><textarea name="body" id="" cols="40" rows="10" ><?php if(isset($body)){echo $body;} ?></textarea></td>
</tr>
<tr>
    <td colspan><input type="submit" name ="submit" value ="確認画面へ"></td>
</tr>

</table>
<a href="logout.php">logout</a>




</form>
</body>
</html>