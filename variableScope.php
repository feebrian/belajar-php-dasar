<?php

// global scope
$x = 15;
function test()
{
  global $x;
  echo $x;
}

function test2()
{
  $y = 12;
  echo $y;
}

test();
test2();


// local scope
function test3()
{
  $y = 10;
  echo $y;
}

// echo $y;
test3();
