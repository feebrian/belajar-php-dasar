<?php include("myFunction.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Increment Decrement Operator</title>
</head>

<body>
  <?php
  $x = 1;
  $x++;

  echo $x;
  echo ++$x;
  echo $x;

  $x--;
  echo $x;
  echo --$x;
  echo $x;
  PHP_EOL;

  // testing alphabet aritmath
  $x = 'W' . breakln();

  for ($n = 0; $n < 5; $n++) {
    echo ++$x . breakln();
  }



  ?>
</body>

</html>