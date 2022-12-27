<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional Operator</title>
</head>

<body>
  <?php
  include("myFunction.php");
  $num1 = 11;
  $num = $num1 < 10 ? $num1 : "Angka melebihi 10";

  echo $num;

  // null coalescing
  breakln();
  $num3 = 12;
  $num = $num3 ?? "Adalah null";
  echo $num;
  ?>
</body>

</html>