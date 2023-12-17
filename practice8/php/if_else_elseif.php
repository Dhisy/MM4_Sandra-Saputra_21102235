<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - If..Else..Elseif</title>
</head>

<body>

  <?php
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  }
  ?>

  <?php
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  ?>

  <?php
  $t = date("H");

  if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  ?>

  <?php
  $a = 5;

  if ($a < 10) $b = "Hello";

  echo $b
  ?>

  <?php
  $a = 13;

  $b = $a < 10 ? "Hello" : "Good Bye";

  echo $b;
  ?>

  <?php
  $a = 13;

  if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
      echo " and also above 20";
    } else {
      echo " but not above 20";
    }
  }
  ?>

</body>

</html>