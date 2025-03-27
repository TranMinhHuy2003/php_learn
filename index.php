<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    username: <br>
    <input type="text" name="username" id=""><br>
    age: <br>
    <input type="text" name="age" id=""><br>
    email: <br>
    <input type="text" name="email" id=""><br>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>
<?php
//Sanitize: chuẩn hóa dữ liệu
//Validate: kiểm tra dữ liệu có hợp lệ hay không, không hợp lệ thì empty
  if(isset($_POST["login"])) {
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if(empty($email)) {
      echo "That email wasn't valid";
    } else {
      echo "Your email is {$email}";
    }
  }
?>