<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="pizza" id="">
    pizza <br>
    <input type="checkbox" name="foods[]" value="hotdog" id="">
    hotdog <br>
    <input type="checkbox" name="foods[]" value="taco" id="">
    taco <br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>
<?php
  if(isset($_POST["submit"])) {
    $foods = $_POST["foods"];
    foreach($foods as $food) {
      echo $food . "<br>";
    }
  }
?>