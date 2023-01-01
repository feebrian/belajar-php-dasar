<?php

// object oriented
$hostname = "localhost";
$username = "root";
$password = "adamfebrian";

$conn = new mysqli($hostname, $username, $password);

// check connection
if (!$conn) {
  die("Connection failed" . $conn->connect_error);
} else {
  echo "Connection Success" . PHP_EOL;
}


// procedural
$conn = mysqli_connect($hostname, $username, $password);

if (!$conn) {
  die("Connection failed" . mysqli_connect_error());
} else {
  echo "Connection Success" . PHP_EOL;
}

// closing mysql connection manually
$conn->close(); // oop
mysqli_close($conn); // procedural