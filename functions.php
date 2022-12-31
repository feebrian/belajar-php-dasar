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
  if ($a <= 20) {
    echo $a . "\n ";
    recursion($a + 1);
  }
}

recursion(0);
echo "<br>";


// functions arguments
function takesArray($input)
{
  echo "$input[0] + $input[1] = ", $input[0] . $input[1] . PHP_EOL;
}
takesArray(
  array('Adam', 'Febrian', 'Aditama')
);

function sayHello($name = "Anonymous")
{
  echo "Hello $name" . PHP_EOL;
}

sayHello("Adam");
sayHello();

function sum(int $x, int $y): string
{
  $value = $x + $y;
  return "Hasil dari $x + $y = $value" . PHP_EOL;
}

$final = sum(12, 15);

for ($i = 0; $i < 5; $i++) {
  echo $final;
}


// echo sum([1], [2]);