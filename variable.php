<html>
<?php

// a variable must use dollar sign($) 

$x = 12;
$nama = "Adam" . " Adam";

$string = (string) $x;
$string = (array) $nama;

echo "<pre>";
var_dump($string);
echo "</pre>";


// global scope variable
$main = 15;

function myFunction()
{
  // echo $main;
}
myFunction();
echo $main;
echo nl2br("\n");

// local variable
function myFunction2()
{
  $nama = "Adam";
  echo ("Nama Saya adalah : " . $nama);
}
myFunction2();
echo nl2br("\n");
echo $nama;

echo nl2br("\n");

// static variable
function myFunction3()
{
  static $angka = 0;
  $angka = $angka + 1;

  echo ("Data ke-" . $angka);
}

echo nl2br("\n");
myFunction3();
echo nl2br("\n");
myFunction3();
echo nl2br("\n");
myFunction3();

echo nl2br("\n");

// global keyword
$firstName = "Adam";
$lastName = "Aditama";

function person()
{
  global $firstName;
  global $lastName;
  global $middleName;
  $middleName = "Febrian";

  $fullName = $firstName . " " . $middleName . " " . "$lastName";

  echo ("Your Fullname is " . $fullName);
}

echo nl2br("\n");
person();
echo nl2br("\n");
echo ("Your Middlename is " . $middleName);

// null variable
echo nl2br("\n");
$a;
var_dump($a);

$a = 12;
if ($a > 10) {
  echo ("Bisa Dibandingkian Karena Tidak NULL");
}

$a = null;
if ($a > 0) {
  echo ("Tidak Bisa Dibandingkan Karena NULL");
}
?>


</html>