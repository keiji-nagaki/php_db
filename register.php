<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoリストユーザ登録画面</title>
</head>

<body>
  <form action="register_act.php" method="POST">
    <fieldset>
      <legend>todoリストユーザ登録画面</legend>
      <div>
        company: <input type="text" name="company">
      </div>
      <div>
        affiliation: <input type="text" name="affiliation">
      </div>
      <div>
        	address: <input type="text" name="address">
      </div>
      <div>
        username: <input type="text" name="username">
      </div>
      <div>
        tel: <input type="text" name="tel">
      </div>
      <div>
        mail: <input type="text" name="mail">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div>
        <button>Register</button>
      </div>
      <a href="login.php">or login</a>
    </fieldset>
  </form>

</body>

</html>