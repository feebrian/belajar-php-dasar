<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Loop</title>
</head>

<body>
  <?php

  include("myFunction.php");

  $num = 1;
  while ($a <= 10) {
    echo $num++;
    breakln();
  }

  ?>
</body>

</html>