<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - RegEx</title>
</head>

<body>
  <?php
  $str = "Visit W3Schools";
  $pattern = "/w3schools/i";
  echo preg_match($pattern, $str); // Outputs 1
  ?>

  <?php
  $str = "The rain in SPAIN falls mainly on the plains.";
  $pattern = "/ain/i";
  echo preg_match_all($pattern, $str); // Outputs 4
  ?>

  <?php
  $str = "Visit Microsoft!";
  $pattern = "/microsoft/i";
  echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
  ?>

  <?php
  $str = "Apples and bananas.";
  $pattern = "/ba(na){2}/i";
  echo preg_match($pattern, $str); // Outputs 1
  ?>
</body>

</html>