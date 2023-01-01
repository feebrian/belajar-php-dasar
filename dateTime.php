<html>
<?php

echo ("Today is : " . date("l, j-F-Y"));
echo nl2br("\n");
// echo ("And the time is : " . date("h:i A")) 

// get asia/jakarta timezone
date_default_timezone_set("Asia/Jakarta");
echo ("The server time in " . date_default_timezone_get() . " is " . date("h:i:sa") . "<br>");

// make my own time
$date = mktime(5, 11, 30, 1, 7, 2022);
echo "My created time is " . date("Y-m-d h:i:s", $date) . "<br>";

// strtotime
$date = strtotime("yesterday");
echo (date("Y-m-d", $date));

// date immutable
$res = DateTimeImmutable::createFromFormat("Y-m-d", "2023-1-1");
var_dump($res);

?>

</html>