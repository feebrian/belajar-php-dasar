<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While</title>
</head>

<body>
  <?php
  include("myFunction.php");

  $num = 1;
  do {
    echo $num;
    $num++;
    breakln();
  } while ($num <= 10);

  // testing

  $numbers = array();
  $array_size = 10;

  for ($i = 0; $i < $array_size; $i++) {

    do {
      $random = rand(1, 1000);
    } while (($random % 2) == 1);

    $numbers[] = $random;
  }

  asort($numbers);
  echo '<pre>';
  print_r($numbers);
  echo '</pre>';

  ?>
</body>

</html>