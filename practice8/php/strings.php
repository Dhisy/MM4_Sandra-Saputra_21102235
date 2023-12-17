<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Strings</title>
</head>

<body>
  <?php
  echo strlen("Hello world!"); // outputs 12
  ?>

  <?php
  echo str_word_count("Hello world!"); // outputs 2
  ?>

  <?php
  echo strrev("Hello world!"); // outputs !dlrow olleH
  ?>

  <?php
  echo strpos("Hello world!", "world"); // outputs 6
  ?>

  <?php
  echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
  ?>


</body>

</html>