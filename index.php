<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">quantity: </label><br>
    <input type="text" name="quantity" id=""><br>
    <input type="submit" value="total">
  </form>
</body>
</html>
<?php 
  $item = "pizza";
  $price = 5.99;
  $total = null;
  $quantity = $_GET["quantity"];

  $total = $price * $quantity;

  echo "You have ordered {$quantity} x {$item}/s <Br>";
  echo "Your total is: \${$total}";
?>