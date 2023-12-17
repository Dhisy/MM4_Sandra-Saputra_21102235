<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Comments</title>
</head>

<body>

<?php
// PHP COMMENTS

// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */
?>

<?php
// Outputs a welcome message:
echo "Welcome Home!";
?>

<?php
echo "Welcome Home!"; // Outputs a welcome message
?>

<?php
// echo "Welcome Home!";
?>

<?php
/*
The next statement will
print a welcome message
*/
echo "Welcome Home!";
?>
<?php
/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/
echo "Hello!";
?>

<p>Using comments to ignore parts of a code line:</p>
 
<?php
$x = 5 /* + 15 */ + 5;
echo $x;
?>
 
</body>

</html>