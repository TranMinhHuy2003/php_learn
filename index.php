<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="visa" id="">
    Visa<br>
    <input type="radio" name="credit_card" value="mastercard" id="">
    Mastercard<br>
    <input type="radio" name="credit_card" value="momo" id="">
    Momo<br>
    <input type="submit" name="confirm" value="Confirm">
  </form>
</body>
</html>
<?php
  if(isset($_POST["confirm"]) && isset($_POST["credit_card"])) {
    $credit_card = $_POST["credit_card"];
    switch($credit_card) {
      case "visa":
        echo "You selected Visa";
        break;
      case "mastercard":
        echo "You selected MasterCard";
        break;
      case "momo":
        echo "You selected Momo";
        break;
    }
  } else {
    echo "Please select";
  }
?>