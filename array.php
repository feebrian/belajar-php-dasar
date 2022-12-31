<?php

// indexed array
$cars = array("BMW", "Avanza", "Pajero");

foreach ($cars as $car) {
  echo "I like $car" . PHP_EOL;
}

// associative array
$peoples = array('Adam' => 'SMK 1', 'Azzam' => 'SMA 1', 'Yanuar' => 'Muhammadiyah 1');
foreach ($peoples as $name => $school) {
  echo "$name bersekolah di $school" . PHP_EOL;
}

// multidimensional array
$weather = [
  array('January', 'Rainy'),
  array('February', 'Rainy'),
  array('March', 'Dry'),
  array('April', 'Dry')
];

// echo "Weather in " . $weather[0][0] . " is " . $weather[0][1] . PHP_EOL;
for ($w = 0; $w < 3; $w++) {
  echo "Weather in " . $weather[$w][0] . " is " . $weather[$w][1] . PHP_EOL;
}

// range on array
foreach (range(0, 100, 10) as $num) {
  echo $num;
}