<html>
<?php

// percobaan explode function
$asdf = "Adam Febrian Aditama";
$x = explode(" ", $asdf);
$length = strlen($asdf);

for ($i = 0; $i < $length; $i++) {
  echo "<pre>";
  echo $x[$i];
  echo "</pre>";
}

// 

?>

</html>