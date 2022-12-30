<?php

function number(...$number) {
  $total = 0;
  foreach ($number as $value) {
    $total += $value;
  }

  echo "Total " . implode(",", $number) . " = $total" . PHP_EOL;
}

number(1, 2, 3, 4, 5, 6, 7, 8);
