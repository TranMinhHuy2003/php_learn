<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">radius: </label><br>
    <input type="text" name="radius" id=""><br>
    <input type="submit" value="calculate">
  </form>
  <br>
</body>
</html>
<?php
  $r = $_POST["radius"];
  $c = null;
  $s = null;
  $v = null;

  $c = 2*pi()*$r;
  $c = round($c, 2);

  $s = pi() * pow($r, 2);
  $s = round($s, 2);

  $v = 4/3 * pi() * pow($r, 3);
  $v = round($v, 2);

  echo "Circumference: {$c}cm <br>";
  echo "Area: {$s}cm^2 <br>";
  echo "Volume: {$v}cm^3";

  // $x = $_POST["x"];
  // $y = $_POST["y"];
  // $z = $_POST["z"];
  // $total = null;
  
  // //$total = abs($x);
  // //$total = round($x); -3 -> 3
  // //$total = floor($x); all round down
  // //$total = ceil($x); all round down
  // //$total = sqrt($x);
  // //$total = pow($x, $y);
  // //$total = max($x, $y, $z);
  // //$total = min($x, $y, $z);
  // //$total = pi();
  // $total = rand(1, 6);


  // echo $total;
?>