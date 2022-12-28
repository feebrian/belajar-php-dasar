<?php

// associative array
$people = array('name1' => 'Adam', 'name2' => 'Febrian', 'name3' => 'Aditama');

foreach ($people as $key => $value) {
  echo "$key = $value \n";
}

// multidimensional array
$people =
  array(
    'name' => 'adam'
  );

for ($i = 1, $size = count($people); $i < $size; $i++) {
  print_r($people[$i]);
}

foreach ($people as $key => $value) {
  echo "$key = $value \n";
}
