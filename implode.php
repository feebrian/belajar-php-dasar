<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $name = "Adam Febrian Aditama";
  $explode = explode(" ", $name);
  $result = implode("-", $explode);

  echo nl2br($result . "\n");


  // testing
  $fileName = "asdf.jpg";
  $fileProp = explode(".", $fileName);
  $ext = end($fileProp);

  $randomNum = (array)random_int(12345, 98765);
  $newFileName = implode(".", $randomNum) . "." . $ext;

  echo $newFileName;

  ?>

</body>

</html>