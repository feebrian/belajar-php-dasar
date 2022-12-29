<?php

function myFunction()
{
  echo "This is my first function <br>";
}

myFunction();


// conditional functions
$bool = true;

// showTime(); ERROR

if ($bool) {
  function showTime()
  {
    echo "Jam 10 kurang 15 menit. <br>";
  }
}

if ($bool) showTime();


// functions within functions
function test1()
{
  function test2()
  {
    echo "This is function test2() <br>";
  }
}

test1();
test2();


// recursive function
function recursion($a)
{
  if ($a <= 20){
    echo $a . "\n";
    recursion($a + 1);
  }
}

recursion(0);
