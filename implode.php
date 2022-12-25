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

  $date = (array) date("ymdhis");
  $newFileName = implode(".", $date) . "." . $ext;

  echo nl2br($newFileName . "\n");
  echo "<pre>";
  var_dump($date);
  echo "</pre>";

  ?>

</body>

</html>