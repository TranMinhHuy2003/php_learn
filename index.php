<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">country:</label>
    <input type="text" name="country" id=""><br>
    <input type="submit" value="submit">
  </form>
</body>
</html>
<?php
  $capitals = array("USA" => "Washington D.C.",
                    "Japan" => "Kyoto",
                    "South Korea" => "Seoul",
                    "India" => "New Dehli");
  $countries = array_keys($capitals);
  $country = $_POST["country"];
  if (!in_array($country, $countries)) {
    echo "The country is not available";
  } else {
    $capital = $capitals[$country];
    echo "The capital of {$country} is {$capital}";
  }

  //$capitals["USA"] = "Los Vegas";
  // $capitals["China"] = "Beijing";
  // array_pop($capitals);
  // array_shift($capitals);
  // $keys = array_keys($capitals);
  // $values = array_values($capitals);\
  // $capitals = array_flip($capitals);
  // $capitals = array_reverse($capitals);
?>