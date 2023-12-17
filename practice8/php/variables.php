<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Variables</title>
</head>

<body>
  <!-- Variables -->
  <?php
  $txt = "Hello world!";
  $x = 5;
  $y = 10.5;
  ?>

  <?php
  $txt = "W3Schools.com";
  echo "I love $txt!";
  ?>

  <?php
  $txt = "W3Schools.com";
  echo "I love " . $txt . "!";
  ?>

  <?php
  $x = 5;
  $y = 4;
  echo $x + $y;
  ?>

  <!-- Variables Scope -->
  <?php
  $x = 5; // global scope

  function myTest()
  {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();

  echo "<p>Variable x outside function is: $x</p>";
  ?>

  <?php
  function myTest1()
  {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest1();

  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";
  ?>

  <?php
  $x = 5;
  $y = 10;

  function myTest2()
  {
    global $x, $y;
    $y = $x + $y;
  }

  myTest2();
  echo $y; // outputs 15
  ?>

  <?php
  $x = 5;
  $y = 10;

  function myTest3()
  {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  myTest3();
  echo $y; // outputs 15
  ?>

  <?php
  function myTest4()
  {
    static $x = 0;
    echo $x;
    $x++;
  }

  myTest4();
  myTest4();
  myTest4();
  ?>
</body>

</html>