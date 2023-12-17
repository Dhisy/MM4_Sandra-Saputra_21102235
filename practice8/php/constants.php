<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Constants</title>
</head>

<body>
  <?php
  define("GREETING", "Welcome to W3Schools.com!");
  echo GREETING;
  ?>

  <?php
  define("GREETING1", "Welcome to W3Schools.com!", true);
  echo greeting1;
  ?>

  <?php
  const MYCAR = "Volvo";
  echo MYCAR;
  ?>

  <?php
  define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  ?>

  <?php
  define("GREETING3", "Welcome to W3Schools.com!");

  function myTest()
  {
    echo GREETING3;
  }

  myTest();
  ?>
</body>

</html>