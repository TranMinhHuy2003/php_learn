<?php
  include("database.php");

  $username = "Huy Tran";
  $password = "pizza32423";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
  try {
    mysqli_query($conn, $sql);
    echo "User is now registered <br>";
  }
  catch(mysqli_sql_exception) {
    echo "Could not register user";
  }

  mysqli_close($conn);
?>