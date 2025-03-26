<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">username:</label>
    <input type="text" name="username" id="">
    <label for="">password:</label>
    <input type="password" name="password" id="">
    <input type="submit" name="login" value="Login"><br>
  </form>
</body>
</html>
<?php
  //isset(): return TRUE if a variable is declared and not null
  //empty(): return TRUE if a variable is not declared, false, null, ""
  
  foreach($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
  }

  if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username)) {
      echo "username is missing";
    } elseif(empty($password)) {
      echo "password is missing";
    } else {
      echo "Hello {$username}";
    }
  } 
?>