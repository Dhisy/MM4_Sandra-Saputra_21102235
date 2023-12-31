<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Superglobals</title>
</head>

<body>
  <!-- $GLOBALS -->
  <?php
  $x = 75;
  $y = 25;

  function addition()
  {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  addition();
  echo $z;
  ?>


  <!-- $_SERVER -->

  <?php
  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['HTTP_HOST'];
  echo "<br>";
  echo $_SERVER['HTTP_REFERER'];
  echo "<br>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_NAME'];
  ?>

  <!-- $_REQUEST -->

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  ?>


  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  ?>

  <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

  <?php
  echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
  ?>
</body>

</html>