<?php

if (file_exists("index.html")) {

  $file = "index.html";
  $file_open = fopen($file, "a"); // open file
  $file_size = filesize($file); // get file size
  $data = fwrite($file_open, "This is a string"); // assign file data to $data

  var_dump($data);

} else {
  echo "File not found";
}
