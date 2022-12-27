<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment Operator</title>
</head>

<body>
  <?php

  $x = 10;
  $y = 5;

  echo $x . "\n" . $y;

  echo "<br>" . $x += 10; // 20
  echo "<br>" . $x -= 10; // 10
  echo "<br>" . $x *= 10; // 100
  echo "<br>" . $x /= 10; // 10
  echo "<br>" . $x **= 10; // 0
  echo "<br>" . $x %= 10; // 0

  // a tricky assignment
  echo "<br>" . $x .= " adam";

  ?>
</body>

</html>