<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
</body>
</html>
<?php
  $foods = array("apple", "kiwi", "banana", "orange");
  //array_push($foods, "cherry");
  // array_pop($foods);
  // array_shift($foods);
  $foods = array_reverse($foods);
  foreach($foods as $food) {
    echo $food . "<br>";
  }
  echo count($foods);
?>