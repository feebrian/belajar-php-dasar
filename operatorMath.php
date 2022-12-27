<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Operator</title>
</head>

<body>
  <?php

  $x = 1.4;
  echo -$x;
  echo "<br>";

  // pertambahan / addition
  $x = 10;
  $y = 3;
  $result = $x + $y; // 10 + 5
  echo $result;
  echo "<br>";
  $result = $x - $y; // 10 - 5
  echo $result;
  echo "<br>";
  $result = $x / $y; // 10 / 5
  echo $result;
  echo "<br>";
  $result = $x * $y; // 10 * 5
  echo $result;
  echo "<br>";
  $result = $x % $y; // 10 % 5
  echo $result;
  echo "<br>";
  $result = $x ** $y; // 10 ** 5
  echo $result;
  echo "<br>";

  // testing "/"
  $result = $x / $y;
  var_dump($result);

  echo "<br>";

  // intdiv()
  echo intdiv(20, 3) . "<br>";
  echo (20 / 3) . "<br>";

  // dividing two int also can be done using int() function 
  $angka1 = 3;
  $angka2 = 10;
  $result = $angka1 / $angka2;
  echo (int) $result . "<br>";

  // fmod()
  $result = fmod($angka1, $angka2);
  echo $result . "<br>";

  $x = 5.7;
  $y = 1.3;
  $r = fmod($x, $y);
  echo $r;
  // $r equals 0.5, because 4 * 1.3 + 0.5 = 5.7
  ?>
</body>

</html>