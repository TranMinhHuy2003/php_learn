<?php
  // hashing = transforming sensitive data into letters,
  //           numbers, and/or symbols via a mathematical process
  //           (similar to encryption)
  //           Hides the original data from 3rd parties.

  $password = "pizza123";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  echo password_verify($password, $hash);
?>
