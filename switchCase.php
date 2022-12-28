<?php

$hour = date("H:m:s");

switch ($hour) {
  case $hour <= 10:
    echo ("Good Morning \n");
    echo ("Its " . $hour . "\n");
    break;
  case $hour <= 16:
    echo ("Good Afternoon \n");
    echo ("Its " . $hour) . "\n";
    break;
  case $hour <= 24:
    echo ("Good Night \n");
    echo ("Its " . $hour . "\n");
    break;
}
