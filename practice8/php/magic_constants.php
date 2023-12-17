<?php

namespace myArea;

function myValue1()
{
  return __NAMESPACE__;
}
?>

<?php

namespace myArea;

class Fruits2
{
  public function myValue2()
  {
    return Fruits::class;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Magic Constants</title>
</head>

<body>
  <?php
  class Fruits
  {
    public function myValue()
    {
      return __CLASS__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();
  ?>

  <?php
  echo __DIR__;
  ?>

  <?php
  echo __FILE__;
  ?>

  <?php
  function myValue()
  {
    return __FUNCTION__;
  }
  echo myValue();
  ?>

  <?php
  echo __LINE__;
  ?>

  <?php
  class Fruits1
  {
    public function myValue()
    {
      return __METHOD__;
    }
  }
  $kiwi = new Fruits1();
  echo $kiwi->myValue();
  ?>

  <?php
  echo myValue1();
  ?>

  <?php
  trait message1
  {
    public function msg1()
    {
      echo __TRAIT__;
    }
  }

  class Welcome
  {
    use message1;
  }

  $obj = new Welcome();
  $obj->msg1();
  ?>

  <?php
  $kiwi = new Fruits2();
  echo $kiwi->myValue2();
  ?>


</body>

</html>