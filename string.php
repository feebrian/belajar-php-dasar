<html>
<?php

$string = "Nama Saya Adalah Adam";
echo nl2br($string . "\n");

// string length
echo (strlen("Adam Febrian Aditama"));

// string word count
$sample = "AdamFebrianAditama";

$count = str_word_count($sample);
echo nl2br("\n" . $count);

// reverse string
echo nl2br("\n " . strrev("Read this ok?"));

// string position
echo nl2br("\n" . strpos("Adam Febrian Aditama", "Adi"));

// string replace
echo nl2br("\n" . str_replace("Aditama", "Adam", "Hello Aditama!"));

// string convert to uppercase / lowercase
echo nl2br("\n" . ucwords("i like to play rubik cube"));
echo nl2br("\n" . strtoupper("i like to play rubik cube"));
echo nl2br("\n" . strtoupper("I LIKE TO PLAY RUBIK CUBE"));
echo nl2br("\n" . strtolower("i like to play rubik cube"));
echo nl2br("\n" . ucfirst("i like to play rubik cube"));
echo nl2br("\n" . lcfirst("i like to play rubik cube"));

// string is an array of character
echo "<br>";
$str = "This is String";

for ($i = 0; $i < strlen($str); $i++) {
  echo $str[$i];
}

?>

<?php

// php explode
$string1 = "Hello world. It's cool day.";
echo "<pre>";
print_r(explode(" ", $str));
echo "</pre><br>";
?>

<?php
$str = 'three,four,five,six,seven,eight,nine,ten';

echo "<pre>";
// zero limit
print_r(explode(',', $str, 0));

// positive limit 
print_r(explode(',', $str, 8));

// negative limit
print_r(explode(',', $str, -1));
echo "</pre>";


$fileName = "bg.png";
$exp = explode(".", $fileName);
$ext = end($exp);

echo $ext;


?>

</html>