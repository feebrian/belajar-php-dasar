<?php

$num = array(1, 2, 3, 4);

foreach ($num as &$y) {
  echo $y * 2 . "\n";
}
