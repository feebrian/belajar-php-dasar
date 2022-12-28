<?php

// if statement
$num = 3;
if (1 == $num) {
  echo "Angka adalah 1 \n";
}
if ($num != 1) {
  echo "Angka bukan 1 tapi $num \n";
}

// nested if
$bool = true;
$x = 1;
$y = 2;
if ($bool == true) {
  if ($x == 1) {
    if ($y == 2) {
      echo "Apa coba \n";
    }else {
      echo 'Nilai dari variable "$y" bukan 2'."\n";
    }
  } else {
    echo 'Nilai dari variable "$x" bukan 1'."\n";
  }
} else {
  echo 'Nilai dari variable "$bool" adalah false'."\n";
}
