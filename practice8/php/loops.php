<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Loops</title>
</head>

<body>
  <!-- While Loop -->
  <?php
  $x = 1;

  while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
  }
  ?>

  <?php
  $x = 0;

  while ($x <= 100) {
    echo "The number is: $x <br>";
    $x += 10;
  }
  ?>

  <!-- Do While Loop -->

  <?php
  $x = 1;

  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
  ?>

  <?php
  $x = 6;

  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
  ?>

  <!-- For Loop -->

  <?php
  for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  ?>
  <?php
  for ($x = 0; $x <= 100; $x += 10) {
    echo "The number is: $x <br>";
  }
  ?>


  <!-- Foreach Loop -->
  <?php
  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $value) {
    echo "$value <br>";
  }
  ?>

  <?php
  $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

  foreach ($age as $x => $val) {
    echo "$x = $val<br>";
  }
  ?>


  <!-- Break / Continue -->

  <?php
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
  ?>

  <?php
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
  ?>

  <?php
  $x = 0;

  while ($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
    $x++;
  }
  ?>

  <?php
  $x = 0;

  while ($x < 10) {
    if ($x == 4) {
      $x++;
      continue;
    }
    echo "The number is: $x <br>";
    $x++;
  }
  ?>


</body>

</html>