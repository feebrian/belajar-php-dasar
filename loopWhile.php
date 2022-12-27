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
  while ($num <= 10) {
    echo $num++;
    breakln();
  }

  // test pyramid
$i = 1;
while ($i <= 5) {
    $j = 1;
    while ($j <= $i) {
      echo "*&nbsp&nbsp";
      $j++;
    }
    echo "<br>";
    $i++;
}

  ?>
</body>

</html>