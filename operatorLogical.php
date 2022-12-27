<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical Operator</title>
</head>

<body>
  <?php
  include("myFunction.php");
  $a = false || false;
  $b = false || false;
  var_dump($a xor $b);
  breakln();
  var_dump($a && $b);
  ?>
</body>

</html>